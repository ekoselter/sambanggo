<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            'active' => 'home',
            'categories' => Category::all()
        ]);
    }

    
}
