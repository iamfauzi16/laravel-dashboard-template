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
    return view('welcome');
});

Route::get('/dashboard', function() {
    return view('dashboard.home.index');
});

Route::get('/dashboard/login', function() {
    return view('auth.login');
});
Route::get('/dashboard/register', function() {
    return view('auth.register');
});

Route::get('/dashboard/404', function() {
    return view('error.404');
});
Route::get('/dashboard/500', function() {
    return view('error.500');
});

