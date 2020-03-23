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
Route::get('/materi', 'PagesController@materi');
Route::get('/login', 'LoginController@login');
Route::get('/staff', 'StaffController@index');
Route::get('/video', 'PagesController@video');