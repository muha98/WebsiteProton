<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
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
        /* SAPATAU BERGUNA
            $users = DB::table('users')->get();
            //dd($akun);
            if($users->is_admin == 1){
                return redirect('/about');
            } else if($users->is_admin == 0){
                return redirect('/video');
    	}
    	return redirect('/login')->with('error','Akun Belum Terdaftar'); */
    
        return view('home');
    }
}
