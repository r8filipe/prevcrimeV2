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

Route::get('/', function () {
    $event = \App\Event::find(1);
    $i = 99;
    var_dump($event->subcategory->category);

});

Route::get('/events', 'EventsController@getEvents');

Route::get('/map', 'EventsController@getMapEvents');