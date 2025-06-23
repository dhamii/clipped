<?php

// use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgottenPassword;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\ClipController;
use App\Http\Controllers\UserController;



// Route::prefix('/')->name('auth.')->group(function () {
//     Route::get('login', function () {
//         return view('auth.login');
//     });
//     Route::get('signup', function () {
//         return view('auth.signup');
//     });
//     Route::post('login', [UserController::class, 'login'])->name('login');
//     Route::post('signup', [UserController::class, 'signUp'])->name('register');

// });
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');
Route::get('/', function () {
    return view('landing');
});
Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::get('/forgot-password', [ForgottenPassword::class, 'viewForgotPassword'])->name('forgotpassword');
Route::get('/reset-password/{token}', [ForgottenPassword::class, 'viewResetPassword'])->name('resetpassword');
Route::post('/register', [UserController::class, 'signUp'])->name('signup.post');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/clip', [ClipController::class , 'viewCreate']);
Route::post('/{clipurl}', [ClipController::class, 'index']);
Route::get('/fill/{clipurl}', [ClipController::class, 'viewContent']);
Route::post('/li/{clipurl}/save', [ClipController::class, 'savecontent']);
Route::get('/{clip}', [ClipController::class, 'viewClip']);
