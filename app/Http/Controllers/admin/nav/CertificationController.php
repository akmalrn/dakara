<?php

namespace App\Http\Controllers\admin\nav;

use App\Http\Controllers\Controller;
use App\Models\admin\nav\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        $certi = Certification::first();
        return view('backend.nav.certification.index', compact('certi'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'description' => 'calnullable|string',
        ]);

        $data = [
            'description' => $request->input('description'),
        ];
        Certification::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Certif has been successfully saved or updated.');
    }
}
