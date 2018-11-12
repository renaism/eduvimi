<?php

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
    return view('normalisasi.index');
});

Route::get('/normalisasi', function () {
    return view('normalisasi.index');
});

Route::get('/normalisasi/1nf', function () {
    return view('normalisasi.1nf.index');
});

Route::get('/normalisasi/2nf', function () {
    return view('normalisasi.2nf.index');
});

Route::get('/normalisasi/3nf', function () {
    return view('normalisasi.3nf.index');
});

Route::get('/normalisasi/bcnf', function () {
    return view('normalisasi.bcnf.index');
});
