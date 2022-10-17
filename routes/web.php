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
    return view('welcome');
});

//string
Route::get('coba',function() {
    return "Haloo ^^";
});

//array
Route::get('coba1',function(){
    return ['jepri','yp','tanjung','jj'];
});

//json objek
Route::get('coba2',function(){
    return [
        "Nama" => "Jeffry Kurniawan Visnu",
        "Kelas" => "XII RPL 4",
        "NIS" => 3103120116
    ];
});

//objek json ubah status code
Route::get("coba3",function(){
    return response()->json(
        [
            "Nama" => "Jeffry Kurniawan Visnu",
            "Kelas" => "XII RPL 4",
            "NIS" => 3103120116
        ], 201
    );
});
