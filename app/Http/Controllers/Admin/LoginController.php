<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        if (auth()->check()) {
            
            return redirect()->route('dashboard');
        }
        
        return view('admin.login.sign-in');
    }

    public function submit(Request $request)
    {
        $v = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:6'
        ]);

        if (auth()->attempt($v)) {

            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Email or password is wrong']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
