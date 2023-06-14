<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    echo "selamat datang di laravel";
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/', function () {
    return view('index');
});

route::get('/mobil',[MobilController::class,'index']);
route::get('/mobil/create',[MobilController::class,'create']);
route::post('/mobil/simpanData',[MobilController::class,'store']);

route::get('/merk',[MerkController::class,'index']);
route::get('/merk/create',[MerkController::class,'create']);
route::post('/merk/simpanData',[MerkController::class,'store']);

route::get('/merk/edit/{id}',[MerkController::class,'edit']);
route::post('/merk/update/{id}',[MerkController::class,'update']);
route::get('/merk/delete/{id}',[MerkController::class,'delete']);

route::get('/tipe_mobil',[TipeMobilController::class,'index']);
route::get('/tipe_mobil/create',[TipeMobilController::class,'create']);
route::post('/tipe_mobil/simpanData',[TipeMobilController::class,'store']);
route::get('/tipe_mobil/edit/{id}',[TipeMobilController::class,'edit']);
route::post('/tipe_mobil/update/{id}',[TipeMobilController::class,'update']);
route::get('/tipe_mobil/delete/{id}',[TipeMobilController::class,'delete']);