<?php

// use App\Http\Controllers\UserController;
use App\Http\Controllers\ClipController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
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
Route::post('/li/{clipurl}', [ClipController::class, 'index']);
Route::get('/create', [ClipController::class , 'viewCreate']);
Route::get('/li/{clipurl}', [ClipController::class, 'viewContent']);
Route::post('/li/{clipurl}/save', [ClipController::class, 'savecontent']);