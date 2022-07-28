<?php

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/p/create', 'App\Http\Controllers\PostsController@create');

Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index')->name('profile.show');