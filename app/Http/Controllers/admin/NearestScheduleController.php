<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\NearestSchedule;
use Illuminate\Http\Request;

class NearestScheduleController extends Controller
{
    public function index()
    {
        $schedules = NearestSchedule::all();
        return view('backend.nearest.index', compact('schedules'));
    }

    public function create()
    {
        return view('backend.nearest.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'date' => 'required|date',
        ]);

        $file = $request->file('path');
        $destinationPath = ('uploads/nearests');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($destinationPath, $fileName);

        NearestSchedule::create([
            'path' => 'uploads/nearests/' . $fileName,
            'date' => $request->date,
        ]);

        return redirect()->route('nearest_schedule.index')->with('success', 'Schedule created successfully.');
    }

    public function edit($id)
    {
        $schedule = NearestSchedule::findOrFail($id);
        return view('backend.nearest.edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
        ]);

        $schedule = NearestSchedule::findOrFail($id);

        if ($request->hasFile('path')) {
            $oldPath = ($schedule->path);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }

            $file = $request->file('path');
            $destinationPath = ('uploads/nearests');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);
            $schedule->path = 'uploads/nearests/' . $fileName;
        }

        $schedule->date = $request->date;
        $schedule->save();

        return redirect()->route('nearest_schedule.index')->with('success', 'Schedule updated successfully.');
    }

    public function destroy($id)
    {
        $schedule = NearestSchedule::findOrFail($id);

        $imagePath = ($schedule->path);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $schedule->delete();

        return redirect()->route('nearest_schedule.index')->with('success', 'Schedule and image deleted successfully.');
    }
}
