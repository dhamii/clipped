<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signUp(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $incomingFields['password'] = bcrypt(value: $incomingFields['password']);
        // dd($incomingFields);
        $store = User::create($incomingFields);
        auth()->login($store);
        return redirect('/')->withNotify(['Success' => 'SignUp successful']);
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])){
            $request->session()->regenerate();
            // dd('Logged in successfully');
            return redirect('/');
        };
        
        return back()->with('error','Invalid crediential');
    }

    public function logout()
    {
        auth()->logout();
        // dd('Logged out successfully');
        return redirect('/');
    }
}