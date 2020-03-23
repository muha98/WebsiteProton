<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App\User;

class PagesController extends Controller
{
    public function home()
    {
        return view('main');
    }
    public function about()
    {
        return view('about');
    }
 /*   public function login()
    {
        return view('login');
    } */
    public function materi()
    {
        return view('materi');
    }
    /*
    public function staff()
    {
        return view('staff');
    } */
    public function video()
    {
        return view('video');
    }

}