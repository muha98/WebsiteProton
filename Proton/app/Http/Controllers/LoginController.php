<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request) {
        //OIIII MUHA BACA BAGIAN INI YAK
        //KODINGAN YG DIBAWAH INI FUNGSINYA BUAT NGECEK, ITU UDAH SINKRON SAMA TABELNYA APA BELOM
        //TAPI PAS GW JALANIN, MALAH ERROR, "TABLE USERS NOT FOUND" KATANYA.
        //PADAHAL EMANG GAADA TABEL USER, DAN RENCANANYA MAU DIKONEKIN KE TABEL LOGINSTAFF
        //NAH TAPI GW GATAU BIAR NYAMBUNGNYA KE LOGINSTAFF, KALO MAKE KODINGAN YG DIBAWAH INI SECARA DEFAULT
        // NYAMBUNGNYA KE TABEL USERS, GATAU DAH ITU TABEL USERS DAPET DARIMANA.
       // dd(\Auth::attempt([ 'id' => $request->id_staff, 'password' => $request->pw_staff ]));
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
    public function update(Request $request, $id)
    {
        //
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
