<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Authenticating routes
Route::post('/login', 'AuthController@postLogin');
Route::post('/login', 'AuthController@postRegister');
Route::get('/logout', 'AuthController@getLogout');

Route::get('/register', function () {
    if (Auth::check()) {
        $events = App\Event::all();
        return View::make('events', ['events' => $events]);
    }
    return View::make('auth.register');
});

//Administrator routes
Route::get('/map', array('before' => 'auth', 'uses' => 'EventsController@getMapEvents'));
Route::get('/events', array('before' => 'auth', 'uses' => 'EventsController@getEvents'));

Route::get('/', array('before' => 'auth', function () {
    if (Auth::check()) {
        $events = App\Event::all();
        return View::make('events', ['events' => $events]);
    }
    return View::make('auth.login');
}));


