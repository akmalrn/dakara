<?php

namespace App\Http\Controllers\admin\nav;

use App\Http\Controllers\Controller;
use App\Models\admin\nav\Calculation;
use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function index()
    {
        $calcu = Calculation::first();
        return view('backend.nav.calculation.index', compact('calcu'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
        ]);

        $data = [
            'description' => $request->input('description'),
        ];
        Calculation::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Certif has been successfully saved or updated.');
    }
}
