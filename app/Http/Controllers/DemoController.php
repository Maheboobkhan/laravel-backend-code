<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DemoController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // Show the form to create a new user
    public function create()
    {
        return view('user.create');
    }

    // Store the new user in the database
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        // User::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        // ]);
        

        return redirect('/')->with('success', 'User created successfully.');
    }
}
