<?php

namespace App\Http\Controllers\admin\nav;

use App\Http\Controllers\Controller;
use App\Models\admin\nav\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $regis = Registration::first();
        return view('backend.nav.registration.index', compact('regis'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
        ]);

        $data = [
            'description' => $request->input('description'),
        ];
        Registration::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Regis has been successfully saved or updated.');
    }
}
