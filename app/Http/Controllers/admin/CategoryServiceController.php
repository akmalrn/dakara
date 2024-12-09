<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CategoryService;
use Illuminate\Http\Request;

class CategoryServiceController extends Controller
{
    public function create()
    {
        return view('backend.service.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        CategoryService::create([
            'category' => $request->category,
        ]);

        return redirect()->route('services.index')->with('success', 'Category added successfully.');
    }

    public function edit($id)
    {
        $categoryservice = CategoryService::findOrFail($id);
        return view('backend.service.category.edit', compact('categoryservice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255,' . $id,
        ]);

        $categoryservices = CategoryService::findOrFail($id);
        $categoryservices->update([
            'category' => $request->category,
        ]);

        return redirect()->route('services.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $categoryservices = CategoryService::findOrFail($id);
        $categoryservices->delete();

        return redirect()->route('services.index')->with('success', 'Category successfully deleted.');
    }
}
