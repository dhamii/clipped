<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/')->name('auth.')->group(function() {
    Route::get('login', function () {
        return view('auth.login');
    });
    Route::get('signup', function () {
        return view('auth.signup');
    });
    Route::post('login', [RegisterController::class, 'loginNow'])->name('login');
    Route::post('signup', [RegisterController::class, 'signUpNow'])->name('register');
});
