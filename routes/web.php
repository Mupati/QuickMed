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
Route::post('/personnel','QuickMed\HomeController@searchPersonnel');


Route::get('/register','QuickMed\PersonnelController@showRegistrationForm');
Route::post('/register','QuickMed\PersonnelController@register');

Route::get('/feedback','QuickMed\FeedbackController@showFeedbackForm');
Route::post('/feedback','QuickMed\FeedbackController@feedback');

Route::post('/login','QuickMed\LoginController@login');
Route::post('/logout','QuickMed\LoginController@logout');

Route::get('/dashboard','QuickMed\ProfileController@dashboard');
Route::post('/status','QuickMed\ProfileController@status');