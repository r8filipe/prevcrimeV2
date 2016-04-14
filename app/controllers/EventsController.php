<?php
use App\Event;

class EventsController extends \BaseController
{


    public function getEvents()
    {
        $events = Event::all();
        return View::make('events', ['events' => $events]);
    }

    public function getMapEvents()
    {
        $events = Event::all();
        return View::make('eventsmaps', ['events' => $events]);
    }


}
