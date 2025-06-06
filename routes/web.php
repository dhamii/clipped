<?php

// use App\Http\Controllers\UserController;
use App\Http\Controllers\ClipController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::prefix('/')->name('auth.')->group(function () {
    Route::get('login', function () {
        return view('auth.login');
    });
    Route::get('signup', function () {
        return view('auth.signup');
    });
    Route::post('login', [UserController::class, 'login'])->name('login');
    Route::post('signup', [UserController::class, 'signUp'])->name('register');

});
Route::get('/', [ClipController::class , 'viewCreate']);
Route::post('/{clipurl}', [ClipController::class, 'index']);
Route::get('/fill/{clipurl}', [ClipController::class, 'viewContent']);
Route::post('/li/{clipurl}/save', [ClipController::class, 'savecontent']);
Route::get('/{clip}', [ClipController::class, 'viewClip']);