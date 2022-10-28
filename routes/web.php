<?php

use App\Models\tiket;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\AuthController;

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
})->middleware(['auth']);

Route::get('/tiket', function () {
    return view('tiket', [
        "title" => "Tiket",
        "tikets" => tiket::all()
    ]);
});

Route::get('/register', function(){
    return view('register');
})->name("register");

Route::post('/action-register', [AuthController::class, 'actionRegister']);

Route::get('/login', [AuthController::class, 'loginView'])->name("login");

Route::post('/action-login', [AuthController::class, 'actionLogin']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/show/{id}','App\Http\Controllers\TiketController@show')->middleware('auth');

Route::get('/create','App\Http\Controllers\TiketController@create')->middleware('auth');
Route::post('/store','App\Http\Controllers\TiketController@store')->middleware('auth');


