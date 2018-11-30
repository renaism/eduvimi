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
    return view('index');
});

// Route::get('/normalisasi', function () {
//     return view('normalisasi.normalisasi')->with('page', ['sub' => 'normalisasi']);
// });

Route::get('/normalisasi/{section?}', 'PageController@materi')->where(['section' => 'main|1nf|2nf|3nf|bcnf']);
Route::get('/normalisasi/{section?}/materi', 'PageController@materi')->where(['section' => 'main|1nf|2nf|3nf|bcnf']);
Route::get('/normalisasi/{section?}/soal', 'PageController@soal')->where(['section' => 'main|1nf|2nf|3nf|bcnf']);
Route::get('/normalisasi/{section?}/diskusi', 'PageController@diskusi')->where(['section' => 'main|1nf|2nf|3nf|bcnf']);

// Route::get('/normalisasi/{sub}/{tab?}', function ($sub, $tab='materi') {
//     return view('normalisasi.' . $sub . '.' . $tab)->with('page', ['sub' => $sub, 'tab' => $tab]);
// })->where(['sub' => '1nf|2nf|3nf|bcnf', 'tab' => 'materi|soal|diskusi']);

Auth::routes();

Route::post('post', 'PostController@storePost');
Route::post('reply', 'PostController@storeReply');
Route::delete('post/{post}', 'PostController@destroyPost');
Route::delete('reply/{reply}', 'PostController@destroyReply');

Route::get('search', 'PageController@search');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', function() {
    return view('profile');
});
