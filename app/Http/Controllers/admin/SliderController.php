<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('backend.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/sliders'), $imageName);
        }

        Slider::create([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'path' => $imageName ? 'uploads/sliders/' . $imageName : null,
        ]);

        return redirect()->route('slider.index')->with('success', 'Data saved successfully.');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $slider = Slider::findOrFail($id);

        $oldImage = $slider->path;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/sliders'), $imageName);
            $slider->path = 'uploads/sliders/' . $imageName;
            if ($oldImage && file_exists(($oldImage))) {
                unlink(($oldImage));
            }
        }

        $slider->title = $request->title;
        $slider->overview = $request->overview;
        $slider->description = $request->description;
        $slider->save();

        return redirect()->route('slider.index')->with('success', 'Data updated successfully.');
    }


    public function destroy($id)
    {
        $data = Slider::findOrFail($id);

        if (file_exists(($data->path))) {
            unlink(($data->path));
        }

        $data->delete();

        return redirect()->back()->with('success', 'Data deleted successfully.');
    }
}
