<?php


Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments', 'CommentController@store');

//for Auth
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

// if I not give the name: ->name('login')  then it will give an error Route [login] not defined
Route::get('/login', 'SessionsController@create')->name('login');

Route::get('/logout', 'SessionsController@destroy');







