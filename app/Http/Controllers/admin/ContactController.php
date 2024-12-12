<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('backend.contact.index', compact('contact'));
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
            'youtube' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
        ]);

        $data = [
            'phone_number' => $request->input('phone_number'),
            'phone_number_2' => $request->input('phone_number_2'),
            'phone_number_3' => $request->input('phone_number_3'),
            'email_address' => $request->input('email_address'),
            'email_address_2' => $request->input('email_address_2'),
            'address' => $request->input('address'),
            'map' => $request->input('map'),
            'youtube' => $request->input('youtube'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
        ];

        Contact::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->back()->with('success', 'Contact has been successfully saved or updated.');
    }
}
