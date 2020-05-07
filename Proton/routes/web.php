<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('main');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/materi', function () {
    return view('materi');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/staff', function () {
    return view('staff');
});
Route::get('/video', function () {
    return view('video');
});
*/
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/materi', 'PagesController@materi')->middleware('auth');
//Route::get('/login', 'LoginController@login');
//Route::post('/login', 'LoginController@postlogin')->name('login');
Route::get('/staff', 'StaffController@index');
Route::get('/video', 'PagesController@video')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/admin', function() {
        return view('admin.admin');
    }
);


Route::get('homeadmin', 'AdminController@homeadmin')->middleware('auth');
Route::get('materiadmin', 'AdminController@materiadmin')->middleware('auth');
Route::get('staffadmin', 'AdminController@staffadmin')->middleware('auth');
Route::get('videoadmin', 'AdminController@videoadmin')->middleware('auth');
Route::get('/videoedit/{id}','AdminController@videoedit');
Route::post('videoupdate','AdminController@videoupdate');
Route::get('/materiedit/{id}','AdminController@materiedit');
Route::post('materiupdate','AdminController@materiupdate');
Route::get('/jadwaledit/{id}','AdminController@jadwaledit');
Route::post('jadwalupdate','AdminController@jadwalupdate');
Route::get('/staffedit/{id_staff}','AdminController@staffedit');
Route::post('staffupdate','AdminController@staffupdate');
Route::get('/stafftambah','AdminController@stafftambah');
Route::post('/staffupdate2','AdminController@staffupdate2');
Route::get('/homevideo/{id_video}','AdminController@homevideo');
Route::post('homevideoupdate','AdminController@homevideoupdate');
Route::get('/homecarousel/{id_carousel}','AdminController@homecarousel');
Route::post('homecarouselupdate','AdminController@homecarouselupdate');
Route::get('/homeartikel/{id_artikel}','AdminController@homeartikel');
Route::post('homeartikelupdate','AdminController@homeartikelupdate');
});