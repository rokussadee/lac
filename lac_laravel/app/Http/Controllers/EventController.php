<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;

class EventController extends Controller
{
    public function getIndex()
    {
        $events = Event::class::where('date', '>=', Carbon::now('Europe/Brussels'))->orWhere('date_to', '>=', Carbon::now('Europe/Brussels'))->get();
        
        return view('content.programme', ['events' => $events]);
    }
}
