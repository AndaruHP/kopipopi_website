<?php

namespace App\Http\Controllers;

use App\Models\Kontak;

use Illuminate\Http\Request;

class DashboardContactController extends Controller
{
    public function index()
    {
        $contact = Kontak::all();
        return view(
            'dashboard.contact',
            [
                'contacts' => $contact
            ]
        );
    }

    public function create()
    {
        return view('dashboard.contacts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email:dns',
            'phone' => 'required|string',
        ]);

        Kontak::create($validatedData);

        return redirect('/dashboard/contact');
    }

    public function destroy(Kontak $contact)
    {
        Kontak::destroy($contact->id);

        return redirect('/dashboard/contact')->with('success', 'Contact deleted successfully');
    }
}
