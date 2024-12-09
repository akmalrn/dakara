<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('backend.partner.index', compact('partners'));
    }

    public function create()
    {
        return view('backend.partner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg',
            'title' => 'required|string|max:255',
            'link' => 'nullable|url',
        ]);

        $imageName = null;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/partners'), $imageName);
        }

        Partner::create([
            'path' => 'uploads/partners/' . $imageName,
            'title' => $request->title,
            'link' => $request->link,
        ]);

        return redirect()->route('partner.index')->with('success', 'Partner created successfully.');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('backend.partner.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'path' => 'image|mimes:jpeg,png,jpg,gif,webp.sbg',
            'title' => 'required|string|max:255',
            'link' => 'nullable|url',
        ]);

        $partner = Partner::findOrFail($id);
        $imageName = $partner->path;

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/partners'), $imageName);
        }

        $partner->update([
            'path' => 'uploads/partners/' . $imageName,
            'title' => $request->title,
            'link' => $request->link,
        ]);

        return redirect()->route('partner.index')->with('success', 'Partner updated successfully.');
    }

    public function destroy($id)
    {
        $data = Partner::findOrFail($id);

        if (file_exists(('uploads/partnerss/' . $data->path))) {
            unlink(('uploads/partnerss/' . $data->path));
        }

        $data->delete();

        return redirect()->back()->with('success', 'Data deleted successfully.');
    }
}
