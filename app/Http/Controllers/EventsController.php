<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(Request $request) {
        $events = Event::all();
        return view("events")->with("events", $events);
    }
}
