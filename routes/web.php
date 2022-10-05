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
    return view('home');
});

Route::get('/tiket', function () {
    return view('tiket', [
        "tikets" => [
            [
                "id" => "1",
                "asal" => "Jakarta",
                "tujuan" => "Bandung",
                "maskapai" => "Sriwijaya",
                "kelas" => "Ekonomi",
                "harga" => 1000000
            ]
            ]
    ]);
});
