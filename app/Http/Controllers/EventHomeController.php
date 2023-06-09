<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventHomeController extends Controller
{
    public function index()
    {
        // dd($id);
        $data = Event::orderby('event_date', 'DESC')->get();
        return view('event', [
            'events' => $data,
        ]);
    }

    public function detail($id_event)
    {
        // dd($id);
        $data = Event::where('id', $id_event)->get();
        // dd($data);
        return view('eventDetail', [
            'event' => $data
        ]);
    }

    
}
