<?php

namespace App\Http\Controllers\admin\nav;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\nav\Profile;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('backend.nav.profile.index', compact('profile'));
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
            $oldPathLogo = Profile::find(1)->path ?? null;
            if ($oldPathLogo && File::exists(($oldPathLogo))) {
                File::delete(($oldPathLogo));
            }

            $logo = $request->file('path');
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $destinationPath = ('uploads/profile');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $logo->move($destinationPath, $logoName);

            $data['path'] = 'uploads/profile/' . $logoName;
        }

        Profile::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Profile has been successfully saved or updated.');
    }
}
