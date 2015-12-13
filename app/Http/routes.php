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

#show recipes
Route::get('/recipes/show', 'RecipeController@getIndex');

#show a specific recipe
Route::get('/recipes/show/{title?}', 'RecipeController@getShow');

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


/*----------------------------------------------------
/test database connection, CAN BE REMOVED WHEN DONE
-----------------------------------------------------*/


Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
