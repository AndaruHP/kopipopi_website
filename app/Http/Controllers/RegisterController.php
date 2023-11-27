<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('regis.regis');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric|unique:users',
            //users itu tabel
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['role'] = 1;

        //entah kenapa tiba-tiba udah di hash
        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
