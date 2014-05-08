<?php

/*
|--------------------------------------------------------------------------
| Home Route
|--------------------------------------------------------------------------
*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

/*
|--------------------------------------------------------------------------
| Registration Routes
|--------------------------------------------------------------------------
*/

Route::get('register', 'RegistrationController@create')->before('guest');
Route::post('register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout',['as' => 'logout', 'uses' =>'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create','store', 'destroy']]);

/*
|--------------------------------------------------------------------------
| Profile Route
|--------------------------------------------------------------------------
*/

Route::get('/{profile}', ['as' => 'profile', 'uses' => 'ProfilesController@show']);
Route::get('/{profile}/edit', ['as' => 'profile.edit', 'uses' => 'ProfilesController@edit']);




