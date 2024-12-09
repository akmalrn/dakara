<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\WhyUs;
use Illuminate\Http\Request;

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
        ]);

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];

        WhyUs::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'WhyUs has been successfully saved or updated.');
    }
}
