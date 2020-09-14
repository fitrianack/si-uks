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

Route::get('/', function () {
    return view('landing_page.index');
});

Route::get('/home', 'WaliController@home');
Route::get('/profil', 'WaliController@profil');
Route::get('/editprofil', 'WaliController@edit');
Route::post('/editprofil', 'WaliController@update');
Route::get('/agenda', 'WaliController@agenda');
Route::get('/rapor', 'WaliController@rapor');

//auth
Route::get('/login', 'WaliController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/register', 'WaliController@register');
Route::post('/postregister', 'AuthController@postRegister');