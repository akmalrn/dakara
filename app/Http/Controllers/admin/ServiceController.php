<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CategoryService;
use App\Models\admin\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $categoryservices = CategoryService::all();
        $services = Service::with('category')->get();
        return view('backend.service.index', compact('categoryservices', 'services'));
    }

    public function create()
    {
        $categoryservice = CategoryService::all();
        return view('backend.service.create', compact('categoryservice'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|exists:category_services,id',
            'path' => 'required|image|mimes:jpg,jpeg,png,webp,svg',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/services'), $imageName);
        }

        Service::create([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'path' => $imageName ? 'uploads/services/' . $imageName : null,
        ]);

        return redirect()->route('services.index')->with('success', 'Service added successfully.');
    }

    public function edit(Service $service)
    {
        $categoryservice = CategoryService::all();
        return view('backend.service.edit', compact('service', 'categoryservice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'overview' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|exists:category_services,id',
            'path' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg',
        ]);

        $service = Service::findOrFail($id);

        $oldImage = $service->path;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(('uploads/services'), $imageName);
            $service->path = 'uploads/services/' . $imageName;
            if ($oldImage && file_exists(($oldImage))) {
                unlink(($oldImage));
            }
        }

        $service->update([
            'title' => $request->title,
            'overview' => $request->overview,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if ($service->path) {
            $imagePath = ($service->path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
