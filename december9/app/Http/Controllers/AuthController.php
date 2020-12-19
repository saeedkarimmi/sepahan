<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lang;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email|exists:App\User,email',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'password' => Lang::get('auth.failed')
            ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
