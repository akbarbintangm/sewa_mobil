<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/verify', function () {
    return view('auth/verify');
});
Route::get('/passwords/reset', function () {
    return view('auth/passwords/reset');
});
Route::get('/passwords/email', function () {
    return view('auth/passwords/email');
});
Route::get('/passwords/confirm', function () {
    return view('auth/passwords/confirm');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\MAdminController::class, 'index']);
Route::get('/admin/dashboard', [App\Http\Controllers\MAdminController::class, 'index']);
