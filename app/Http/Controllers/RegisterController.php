<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('sessions.register', [
            "title" => "Register"
        ]);
    }

    public function register_post(Request $request) {
        $validateData = $request->validate([
            'name'=> 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validateData["password"] = bcrypt($validateData["password"]);
        $validateData["password"] = Hash::make($validateData["password"]);

        User::create($validateData);
        // $request->session()->flash('success', 'Register was successful!');
        return redirect('/login')->with('success', 'Register was successful!');
    }
}
