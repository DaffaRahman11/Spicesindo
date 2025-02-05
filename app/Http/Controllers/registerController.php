<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('admin.register');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'FirstName' => 'required',
            'LastName' => ['required'],
            'email' => 'required',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
