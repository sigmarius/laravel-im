<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', IndexController::class)->name('main');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth', 'index')->name('auth.login');
    Route::post('/auth', 'signIn')->name('auth.signIn');

    Route::get('/sign-up', 'signUp')->name('auth.sign-up');
    Route::post('/sign-up', 'register')->name('auth.register');

    Route::delete('/exit', 'exit')->name('auth.exit');
});


