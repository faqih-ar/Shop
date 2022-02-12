<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Profil;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        //
        $user = User::where('id', Auth::id())->first();
        return view('profile', compact('user'));
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
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
        ]);

        $user = User::Where('id',$id)->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        
        if($user->save()){
            $profil = Profil::where('user_id',$id)->first();
            $profil->phone_number = $request->input('phone');
            $profil->shipping_address = $request->input('alamat');
            $profil->save();
            return redirect('/profile')->with('success', 'Data Profil Berhasil Di Update!');
        }
        else{
            return redirect('/profil')->with('Error','Error!');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function updateImage(Request $request, $id)
    {
        $this->validate($request,[
            'file' => 'required|mimes: jpeg,png,jpg| max: 2048'
        ]);

        $nama = Auth::user()->name;
        $filename = time()."_".$nama."_".$id.".".$request->file->extension();
        $request->file->move(public_path('assets/'), $filename);
        $profil = Profil::where('user_id',$id)->first();
        $profil->photo = $filename;
        if($profil->save()){
            return redirect('/profile')->with('success','Berhasil Update Foto Profil!');
        }
        else{
            return redirect('/profile')->with('Error','Error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
