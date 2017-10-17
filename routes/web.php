<?php

Route::get('/','QuickMed\HomeController@index');
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

//Route::post('/map','QuickMed\HomeController@map');