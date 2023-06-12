<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class MapWisataController extends Controller
{
    public function index()
    {
        return view('mapWisata');
    }

    
}
