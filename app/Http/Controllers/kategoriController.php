<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('slug', $id)->get();
        // dd($category);
        return view('dashboard.categories.edit',[
            'category' => $category,
            'categories' => Category::All()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $rules = [
            'name' => 'required|max:255',
            'foto' => 'image|file|max:4000'
        ];
        $data_kategori = Category::where('slug',$id)->get();
        // dd($data_kategori);
        if($request->slug != $data_kategori[0]->slug){
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);

        if($request->file('foto')){
            // hapus gambar lama dulu jika ada
            if($data_kategori[0]->foto){
                Storage::delete($data_kategori[0]->foto);
            }
            // update gambar
            $validatedData['foto'] = $request->file('foto')->store('kategori-images');
        }

        Category::where('slug', $id)->update($validatedData);
        return redirect('/dashboard/kategoris')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = Category::where('slug', $id);
        $query->delete();

        return redirect('/dashboard/kategoris')->with('success', 'Category has been deleted!');

    }
}
