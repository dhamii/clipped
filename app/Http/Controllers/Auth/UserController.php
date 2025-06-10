<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signUp(Request $request)
    {
        $incomingFields = $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $store =User::create($incomingFields);
        auth()->login($store);
        return redirect('/')->withNotify(['Success' => 'SignUp successful']);
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['passwprd']])){
            $request->session()->regenerate();
            return redirect('/');
        };
        
        return back()->withErrors(['error' =>'Invalid crediential']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
