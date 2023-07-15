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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/resep_nasi', function () {
    return view('resep_nasi');
});

Route::get('/resep_bubur', function () {
    return view('resep_bubur');
});

Route::get('/resep_puree', function () {
    return view('resep_puree');
});

Route::get('/resep_fingerfood', function () {
    return view('resep_fingerfood');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/discuss', function () {
    return view('discuss');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/diagnosa', function () {
    return view('diagnosa');
});
