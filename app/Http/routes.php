<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/servicios', function () {
    return view('servicios');
});


Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});


Route::get('/nuestros-clientes', function () {
    return view('nuestros-clientes');
});


Route::get('/contacto', function () {
    return view('contacto');
});

