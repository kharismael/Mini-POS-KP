<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'login'    => 'required',
            'password' => 'required',
        ]);
    
        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL ) 
            ? 'email' 
            : 'username';
    
        $request->merge([
            $login_type => $request->input('login')
        ]);
    
        if (Auth::attempt($request->only($login_type, 'password'))) {
            return redirect('/');
        }
    
        return redirect()->back()
            ->withInput()
            ->withErrors([
                'login' => 'Email/Username/password salah',
            ]);
    
    }
}
