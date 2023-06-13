<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventHomeController extends Controller
{
    public function index()
    {
        // dd($id);
        $data = Event::orderby('event_date', 'DESC')->paginate(20)->withQueryString();
        return view('event', [
            'events' => $data,
        ]);
    }

    public function detail($category)
    {
        // dd($id);
        $data = Event::where('category', $category)->get();
        if ($category == "1"){
            $kategori = "Sambang Gisik";
        }
        elseif ($category == "2"){
            $kategori = "Sambang Gawe";
        }
        else{
            $kategori = "Sambang Gunung";
        }
        // dd($data);
        return view('eventDetail', [
            'events' => $data,
            'kategori' => $kategori
        ]);
    }

    
}
