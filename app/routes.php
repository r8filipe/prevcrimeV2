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

Route::get('/events', 'EventsController@getEvents');

Route::get('/map', 'EventsController@getMapEvents');

Route::get('/{lang}', function ($lang) {
    App::setLocale($lang);
    $events = App\Event::all();
    return View::make('events', ['events' => $events]);

    //temos de deixar trabalho para o Joel
    //amanha vou acabar o registar e comecar a fazer novamente o webservice
    // e vou ter de fazer alterações em alguma coisas
    
});
