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
    return view('welcome');
});


Route::get('/index','QuickMed\HomeController@index');
Route::get('/register','QuickMed\HomeController@showRegistrationForm');
Route::post('/register','QuickMed\HomeController@register');
Route::get('/display_personnel','QuickMed\HomeController@show');
Route::post('/personnel','QuickMed\HomeController@showPersonnel');
Route::get('/feedback','QuickMed\HomeController@showFeedbackForm');
Route::post('/feedback','QuickMed\HomeController@feedback');