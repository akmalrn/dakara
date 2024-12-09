<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\TestimonialClient;
use Illuminate\Http\Request;

class TestimonialClientController extends Controller
{
    public function index()
    {
        $testimonialClients = TestimonialClient::all();
        return view('backend.testimonial-clients.index', compact('testimonialClients'));
    }

    public function create()
    {
        return view('backend.testimonial-clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'description' => 'required|string',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/testimonialClients'), $imageName);
            $imageName = 'uploads/testimonialClients/' . $imageName;
        }

        TestimonialClient::create([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
            'path' => $imageName,
        ]);

        return redirect()->route('testimonials-clients.index')->with('success', 'Data saved successfully.');
    }

    public function edit($id)
    {
        $testimonialClient = testimonialClient::findOrFail($id);
        return view('backend.testimonial-clients.edit', compact('testimonialClient'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|required|string|max:255',
            'position' => 'nullable|required|string',
            'description' => 'nullable|required|string',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:8192',
        ]);

        $data = TestimonialClient::findOrFail($id);

        if ($request->hasFile('path')) {
            if ($data->path && file_exists(($data->path))) {
                unlink(($data->path));
            }

            $image = $request->file('path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(('uploads/testimonialClients'), $imageName);
            $data->path = 'uploads/testimonialClients/' . $imageName;
        }


        $data->update([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
        ]);

        return redirect()->route('testimonials-clients.index')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $data = TestimonialClient::findOrFail($id);

        if (file_exists(($data->path))) {
            unlink(($data->path));
        }

        $data->delete();

        return redirect()->back()->with('success', 'Data deleted successfully.');
    }
}
