<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        request()->validate([
            'email'=>['required','unique:users','email'],
            'username'=>['required','unique:users','alpha_dash','min:8'],
            'name'=>['required','string','min:3'],
            'password'=>['required','min:8'],
        ]);

        User::create([
            'id'=>(string) Str::uuid(),
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ]);

        return redirect('/login');
    }
}
