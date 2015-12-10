<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*----------------------------------------------------
/welcome page
-----------------------------------------------------*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('/welcome', 'WelcomeController@getIndex');

/*----------------------------------------------------
/User Registration and Login / Logout
-----------------------------------------------------*/

# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');

# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');

# Process logout
Route::get('/logout', 'Auth\AuthController@getLogout');

# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');

# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');


/*----------------------------------------------------
/recipes
-----------------------------------------------------*/

# Show recipe creation form
Route::get('/recipes/create', 'RecipeController@getCreate');

# Process  recipe creation form
Route::post('/recipes/create', 'RecipeController@postCreate');

# Show recipe Edit form
Route::get('/recipes/edit/{id?}', 'RecipeController@getEdit');

# Process recipe edit form
Route::post('/recipes/edit', 'RecipeController@postEdit');

# Show recipe confirm Delete form
Route::get('/recipes/confirm-delete/{id?}', 'RecipeController@getConfirmDelete');

# show recipe Delete form
Route::get('/recipes/delete/{id?}', 'RecipeController@getDoDelete');

#show recipes
Route::get('/recipes', 'RecipeController@getIndex');

#show a specific recipe
Route::get('/recipes/show/{title?}', 'RecipeController@getShow');
