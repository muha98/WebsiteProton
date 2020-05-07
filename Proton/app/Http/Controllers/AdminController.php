<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\User;

class AdminController extends Controller
{
    public function homeadmin()
    {
        $staff = DB::table('homecarousel')->get();
        $staff2 = DB::table('homevideo')->get();
        $staff3 = DB::table('homeartikel')->get();
        return view('admin.homeadmin', ['staff' => $staff, 'staff2' => $staff2, 'staff3' => $staff3]);
    }
    public function materiadmin()
    {
        $staff = DB::table('materi')->get();
        $staff2 = DB::table('jadwal')->get();
        return view('admin.materiadmin', ['staff' => $staff, 'staff2' => $staff2]);
    }
    public function homevideo($id_video)
    {
        $edit = DB::table('homevideo')->where('id_video', $id_video)->get();
        return view('homevideo',compact('edit'));
    }
    public function homevideoupdate(Request $request){
        $edit = DB::table('homevideo')->where('id_video', $request->id_video)
        ->update([
        'video' => $request->video
        ]);
        return redirect('/homeadmin');
    }
    public function homecarousel($id_carousel)
    {
        $edit = DB::table('homecarousel')->where('id_carousel', $id_carousel)->get();
        return view('homecarousel',compact('edit'));
    }
    public function homecarouselupdate(Request $request){
        $edit = DB::table('homecarousel')->where('id_carousel', $request->id_carousel)
        ->update([
        'gambar' => $request->gambar
        ]);
        return redirect('/homeadmin');
    }
    public function homeartikel($id_artikel)
    {
        $edit = DB::table('homeartikel')->where('id_artikel', $id_artikel)->get();
        return view('homeartikel',compact('edit'));
    }
    public function homeartikelupdate(Request $request){
        $edit = DB::table('homeartikel')->where('id_artikel', $request->id_artikel)
        ->update([
        'foto' => $request->foto,
        'isi' => $request->isi
        ]);
        return redirect('/homeadmin');
    }
    public function staffadmin()
    {
        $staff = DB::table('staff')->get();
        return view('admin.staffadmin', ['staff' => $staff]);
    }
    public function videoadmin()
    {
        $staff = DB::table('video')->get();
        return view('admin.videoadmin', ['staff' => $staff]);
    }
    public function videoedit($id)
    {
        $edit = DB::table('video')->where('id', $id)->get();
        return view('videoedit',compact('edit'));
    }
    public function videoupdate(Request $request){
        $edit = DB::table('video')->where('id', $request->id)
        ->update([
        'link' => $request->link
        ]);
        return redirect('/videoadmin');
    }
    public function materiedit($id)
    {
        $edit = DB::table('materi')->where('id', $id)->get();
        return view('materiedit',compact('edit'));
    }
    public function materiupdate(Request $request){
        $edit = DB::table('materi')->where('id', $request->id)
        ->update([
        'link' => $request->link
        ]);
        return redirect('/materiadmin');
    }
    public function jadwaledit($id)
    {
        $edit = DB::table('jadwal')->where('id', $id)->get();
        return view('jadwaledit',compact('edit'));
    }
    public function jadwalupdate(Request $request){
        $edit = DB::table('jadwal')->where('id', $request->id)
        ->update([
        'foto' => $request->foto
        ]);
        return redirect('/materiadmin');
    }
    public function staffedit($id_staff)
    {
        $edit = DB::table('staff')->where('id_staff', $id_staff)->get();
        return view('staffedit',compact('edit'));
    }
    public function staffupdate(Request $request){
        $edit = DB::table('staff')->where('id_staff', $request->id_staff)
        ->update([
        'id_staff' => $request->id_staff,
        'nama_staff' => $request->nama_staff,
        'email' => $request->email
        ]);
        return redirect('/staffadmin');
    }
    public function stafftambah() {
        return view('stafftambah');
    }
    // method untuk insert data ke table pegawai
    public function staffupdate2(Request $request)
    {
	// insert data ke table pegawai
	DB::table('staff')->insert([
		'id_staff' => $request->id_staff,
		'nama_staff' => $request->nama_staff,
		'email' => $request->email
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/staffadmin');
 
    }
}