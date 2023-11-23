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
    return view('inicio');
});

Route::get('/login', function () {
    return view('login'); 
});

Route::get('/register', function () {
    return view('register'); 
});

Route::get('/noticias', function () {
    return view('noticias'); 
});

Route::get('/terminos', function () {
    return view('terminos'); 
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::post('/register', 'AuthController@register')->name('register');

