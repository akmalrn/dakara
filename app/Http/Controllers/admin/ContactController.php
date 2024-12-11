<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('backend.contact.index');
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'phone_number' => 'nullable|string|max:255',
            'phone_number_2' => 'nullable|string|max:255',
            'phone_number_3' => 'nullable|string|max:255',
            'email_address' => 'nullable|email|max:255',
            'email_address_2' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'map' => 'nullable|string',
        ]);

        $data = [
            'phone_number' => $request->input('phone_number'),
            'phone_number_2' => $request->input('phone_number_2'),
            'phone_number_3' => $request->input('phone_number_3'),
            'email_address' => $request->input('email_address'),
            'email_address_2' => $request->input('email_address_2'),
            'address' => $request->input('address'),
            'map' => $request->input('map'),
        ];

        Contact::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Configuration has been successfully saved or updated.');
    }
}
