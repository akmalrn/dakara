<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('backend.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('backend.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpg,jpeg,png,webp,svg',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/teams'), $imageName);
        }

        Team::create([
            'path' => 'uploads/teams/' . $imageName,
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
        ]);

        return redirect()->route('teams.index')->with('success', 'Team member added successfully.');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.teams.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:8192',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $team = Team::findOrFail($id);

        if ($request->hasFile('path')) {
            if ($team->path && file_exists(($team->path))) {
                unlink(($team->path));
            }

            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/teams'), $imageName);
            $team->path = 'uploads/teams/' . $imageName;
        }

        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        $team->save();

        return redirect()->route('teams.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        if ($team->path && file_exists(($team->path))) {
            unlink(($team->path));
        }
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Team member deleted successfully.');
    }
}
