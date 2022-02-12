<?php

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
    return view('welcome');
});

Auth::routes();
//Admin


//User
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');

Route::get('/profile', 'ProfilController@index');
Route::put('/profile/{id}', 'ProfilController@edit');
Route::put('/profil/{id}/updatePhoto', 'ProfilController@updateImage');