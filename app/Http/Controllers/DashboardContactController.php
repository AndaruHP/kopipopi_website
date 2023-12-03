<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardContactController extends Controller
{
    public function index()
    {
        $contact = Kontak::all();
        return view(
            'dashboard.contact',
            [
                'contacts' => $contact,
                'active' => 'contact',
                'users' => User::all()
            ]
        );
    }

    public function create()
    {
        return view('dashboard.contacts.create', [
            'active' => 'contact'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email:dns',
            'phone' => 'required|string',
        ]);

        Kontak::create($validatedData);

        return redirect('/dashboard/contact')->with('success', 'Contact created successfully');
    }

    public function destroy(Kontak $contact)
    {
        Kontak::destroy($contact->id);

        return redirect('/dashboard/contact')->with('success', 'Contact deleted successfully');
    }
}
