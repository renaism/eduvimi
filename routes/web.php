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
    return view('index')->with('page', ['sub' => 'index']);
});

Route::get('/normalisasi', function () {
    return view('normalisasi.normalisasi')->with('page', ['sub' => 'normalisasi']);
});

Route::get('/normalisasi/{sub}/{tab?}', function ($sub, $tab='materi') {
    return view('normalisasi.' . $sub . '.' . $tab)->with('page', ['sub' => $sub, 'tab' => $tab]);
})->where(['sub' => '1nf|2nf|3nf|bcnf', 'tab' => 'materi|soal|diskusi']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
