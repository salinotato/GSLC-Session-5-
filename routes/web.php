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
    return view('tampilan');


});

Route::get('/gagal', function () {
        $nilai= 86;
        return view('gagal', compact("nilai"));
});

Route::get('/daftar', function () {
    return view('daftar');


});
