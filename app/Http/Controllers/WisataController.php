<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class WisataController extends Controller
{
    public function index($id_kategori)
    {
        // dd($id);
        $data = Post::where('category_id', $id_kategori)->paginate(20)->withQueryString();
        $kategori = Category::where('id',$id_kategori)->get();
        // dd($data);
        return view('wisata', [
            "title" => "Wisata",
            'active' => 'wisata',
            'posts' => $data,
            'kategori' => $kategori
        ]);
    }

    public function detail($id_wisata)
    {
        // dd($id);
        $data = Post::join('categories','categories.id','=', 'posts.category_id')->where('posts.id', $id_wisata)->get();
        // dd($data);
        return view('detailWisata', [
            'posts' => $data
        ]);
    }

    
}
