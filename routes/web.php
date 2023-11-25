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

Route::get('/secionIniciada', function () {
    return view('secionIniciada');
});


Route::get('/seccionAdmin', function () {
    return view('seccionAdmin');
});

Route::get('/crudProducts', function () {
    return view('crudProducts'); 
});

Route::get('/adminUsuarios', function () {
    return view('adminUsuarios'); 
});



Route::get('/inicio', function () {
    return view('inicio');
});

Route::post('/register', 'AuthController@register')->name('register');

Route::get('/noticias', function () {
    return view('noticias'); 
});

Route::get('/inicion ', function () {
    return view('inicio'); 
});

Route::get('/terminos', function () {
    return view('terminos'); 
});

Route::get('/carrito', function () {
    return view('carrito_compras'); 
});
