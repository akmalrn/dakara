<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('backend.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('backend.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg',
            'title' => 'required',
            'description' => 'required',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/gallerys'), $imageName);
        }

        Gallery::create([
            'category' => $request->category,
            'path' => 'uploads/gallerys/' . $imageName,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully.');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:8192',
        ]);

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/gallerys'), $imageName);

            if ($gallery->path) {
                @unlink(($gallery->path));
            }

            $gallery->path = 'uploads/gallerys/' . $imageName;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->path && file_exists(($gallery->path))) {
            unlink(($gallery->path));
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
