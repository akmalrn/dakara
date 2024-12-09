<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Superiority;
use Illuminate\Http\Request;

class SuperiorityController extends Controller
{
    public function index()
    {
        $superioritys = Superiority::all();
        return view('backend.superiority.index', compact('superioritys'));
    }

    public function create()
    {
        return view('backend.superiority.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/superioritys'), $imageName);
        }

        Superiority::create([
            'title' => $request->title,
            'description' => $request->description,
            'path' => $imageName ? 'uploads/superioritys/' . $imageName : null,
        ]);

        return redirect()->route('superiority.index')->with('success', 'Data saved successfully.');
    }

    public function edit($id)
    {
        $superiority = Superiority::findOrFail($id);
        return view('backend.superiority.edit', compact('superiority'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|required|string|max:255',
            'description' => 'nullable|required|string',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
        ]);

        $data = Superiority::findOrFail($id);

        $oldImage = $data->path;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/sliders'), $imageName);
            $data->path = 'uploads/sliders/' . $imageName;
            if ($oldImage && file_exists(($oldImage))) {
                unlink(($oldImage));
            }
        }

        $data->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('superiority.index')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $data = Superiority::findOrFail($id);

        if (file_exists(($data->path))) {
            unlink(($data->path));
        }

        $data->delete();

        return redirect()->back()->with('success', 'Data deleted successfully.');
    }
}
