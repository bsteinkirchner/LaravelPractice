<?php

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\ProfilesController@index')->name('home');