<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function(){
    return "Halo, gan";
});

Route::get('/helloworld', function(){
    return "Hello World!";
});

Route::get('/countAge', function(){
    return '<form action="proses" method="post"> Masukkan Umur <input type="text" name="age"> <br> <input type="submit" value="ok"> </form>';
});

Route::get('/profil', function(){
    return view('profil');
});

Route::get('/produk/{type}', function($type){
    return view('produk.detail', compact('type'));
});