<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\User;

class PagesController extends Controller
{
    public function home()
    {
        $video = DB::table('homevideo')->get();
        $gambar = DB::table('homecarousel')->get();
        $foto = DB::table('homeartikel')->get();
        $isi = DB::table('homeartikel')->get();
        return view('main', ['video' => $video, 'gambar' => $gambar, 'foto' => $foto, 'isi' => $isi]);
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
        $materi = DB::table('materi')->get();
        $jadwal = DB::table('jadwal')->get();
        return view('materi', ['materi' => $materi, 'jadwal' => $jadwal]);
    }
    /*
    public function staff()
    {
        return view('staff');
    } */
    public function video()
    {
        $video = DB::table('video')->get();
        return view('video', ['video' => $video]);
    }

}