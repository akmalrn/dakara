<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        return view('backend.configuration.index', compact('configuration'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'path_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'website_name' => 'nullable|string',
            'title' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_descriptions' => 'nullable|string',
            'footer' => 'nullable|string',
        ]);

        $data = [
            'website_name' => $request->input('website_name'),
            'title' => $request->input('title'),
            'meta_keywords' => $request->input('meta_keywords'),
            'meta_descriptions' => $request->input('meta_descriptions'),
            'footer' => $request->input('footer'),
        ];

        if ($request->hasFile('path')) {
            $oldPath = Configuration::find(1)->path ?? null;
            if ($oldPath && File::exists(($oldPath))) {
                File::delete(($oldPath));
            }

            $image = $request->file('path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = ('uploads/configuration');
            $image->move($destinationPath, $imageName);

            $data['path'] = 'uploads/configuration/' . $imageName;
        }

        if ($request->hasFile('path_logo')) {
            $oldPathLogo = Configuration::find(1)->path_logo ?? null;
            if ($oldPathLogo && File::exists(($oldPathLogo))) {
                File::delete(($oldPathLogo));
            }

            $logo = $request->file('path_logo');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $destinationPath = ('uploads/configuration');
            $logo->move($destinationPath, $logoName);

            $data['path_logo'] = 'uploads/configuration/' . $logoName;
        }

        Configuration::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Configuration has been successfully saved or updated.');
    }
}
