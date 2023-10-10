<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardPasswController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.users.edit',[
            'users' => User::first()
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
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password_lama' => 'required|min:5|max:255',
            'password_baru' => 'required|min:5|max:255',
            'ulangi_password_baru' => 'required|min:5|max:255'
        ];
        $validasidata = $request->validate($rules);
        $data['password'] = Hash::make($validasidata['ulangi_password_baru']);
        $data['username'] = $validasidata['username'];

        if (!Hash::check($validasidata['password_lama'], auth()->user()->password)) {
            return redirect('/dashboard/passw')->with('PasswError', 'Password lama salah !');
        }else if($request->password_baru != $request->ulangi_password_baru){
            return redirect('/dashboard/passw')->with('PasswError', 'Password baru dan ulangi password tidak sama !');
        }
        else{
            User::where('id', auth()->user()->id)->update($data);
            return redirect('/dashboard/passw')->with('sukses', 'Password berhasil diubah');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
