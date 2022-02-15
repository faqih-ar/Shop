<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::where('id', Auth::id())->first();
        $user_admin = User::where('role', '1')->paginate(5);
        $number = 0;
        if($user->role == 1){
            return view('/home', compact('user'))->with('success','Selamat Datang!');
        }
        else{
            return view('/admin/home', compact(['user','user_admin', 'number']))->with('success','Selamat Datang Admin!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
