<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function authenticate(Request $request) {
        $validate = $request->validate([
            'email' => ['required', 'email'],
            "password" => 'required'
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('failed', 'Login Failed!!!');
    }

    public function index() {
        return view('sessions.login', [
            "title" => "Login"
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
