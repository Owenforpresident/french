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
//*********************************************//
Route::get('/', function () {
    return view('welcome');         //welcome
});

//*********************************************//
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//********************************************************//
Route::get('/vocab', function () {
    return view('vocab');         //welcome
});
Route::get('/verbs', function () {
    return view('verbs');         //welcome
});
Route::get('/everythingelse', function () {
    return view('everythingelse');         //welcome
});
Route::get('/phrases', function () {
    return view('phrases');         //welcome
});
Route::get('/social', function () {
    return view('social');         //welcome
});
