<?php

namespace App\Http\Controllers;

use Password;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgottenPassword extends Controller
{
    public function viewForgotPassword(){
        return view('auth.forgottenpassword');
    }


    public function viewResetPassword($token){
        return view('auth.resetpassword', compact('token'));
    }

    public function resetPassword(Request $request){
        $incomingFields = $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink($incomingFields);
        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);

        // return redirect('/login')->withNotify(['success' => 'Password has been reset successfully.']);
    }

    // public fun
}
