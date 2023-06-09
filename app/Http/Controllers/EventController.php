<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.events.index', [
            "events" => Event::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'event_name' => 'required|max:255',
            'event_image' => 'image|file|max:4000',
            'ket' => 'required'
        ]);

        if($request->file('event_image')){
            $validatedData['event_image'] = $request->file('event_image')->store('event-images');
        }

        $validatedData['event_date'] = $request->event_date;

        Event::create($validatedData);
        return redirect('/dashboard/events')->with('success', 'New event has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('dashboard.events.edit',[
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $rules = [
            'event_name' => 'required|max:255',
            'event_image' => 'image|file|max:4000',
            'ket' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('event_image')){
            // hapus gambar lama dulu jika ada
            if($event->event_image){
                Storage::delete($event->event_image);
            }
            // update gambar
            $validatedData['event_image'] = $request->file('event_image')->store('event-images');
        }

        $validatedData['event_date'] = $request->event_date;

        Event::where('id', $event->id)->update($validatedData);
        return redirect('/dashboard/events')->with('success', 'Event has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event->event_image){
            Storage::delete($event->event_image);
        }
        
        Event::destroy($event->id);
        return redirect('/dashboard/events')->with('success', 'Event has been deleted!');
    }
}
