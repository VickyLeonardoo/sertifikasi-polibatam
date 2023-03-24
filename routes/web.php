<?php

use App\Http\Controllers\AsesiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/as', function () {
    return view('dashboaord');
});

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);
Route::post('/proses_login',[AuthController::class,'prosesLogin']);
Route::get('/pendaftaran',[PendaftaranController::class,'viewPendaftaran'])->name('viewPendaftaran');
Route::post('/simpanPendaftaran',[PendaftaranController::class,'simpanPendaftaran']);



Route::group(['middleware' => ['auth:user']],function(){
    Route::group(['middleware' => ['cek_login:2']],function(){
        Route::get('/dashboard-asesi',[AsesiController::class,'index'])->name('indexAsesi');

    });
    });
