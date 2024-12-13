<?php

namespace App\Http\Controllers\admin\nav;

use App\Http\Controllers\Controller;
use App\Models\admin\nav\Compiler;
use Illuminate\Http\Request;

class CompilerController extends Controller
{
    public function index()
    {
        $compi = Compiler::first();
        return view('backend.nav.compiler.index', compact('compi'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
        ]);

        $data = [
            'description' => $request->input('description'),
        ];
        Compiler::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Certif has been successfully saved or updated.');
    }
}
