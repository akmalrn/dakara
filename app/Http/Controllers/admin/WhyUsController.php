<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WhyUsController extends Controller
{
    public function index()
    {
        $whyus = WhyUs::first();
        return view('backend.why-us.index', compact('whyus'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];

        if ($request->hasFile('path')) {
            $oldPathLogo = WhyUs::find(1)->path ?? null;
            if ($oldPathLogo && File::exists(($oldPathLogo))) {
                File::delete(($oldPathLogo));
            }

            $logo = $request->file('path');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $destinationPath = ('uploads/why-us');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $logo->move($destinationPath, $logoName);

            $data['path'] = 'uploads/why-us/' . $logoName;
        }

        WhyUs::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'WhyUs has been successfully saved or updated.');
    }

}
