<?php

use App\Http\Controllers\AsesiController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SkemaController;
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

Route::get('/pertanyaan-test',[PendaftaranController::class,'testpertanyaan']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/proses_login', [AuthController::class, 'prosesLogin']);
Route::get('/pendaftaran', [PendaftaranController::class, 'viewPendaftaran'])->name('viewPendaftaran');
Route::post('/simpanPendaftaran', [PendaftaranController::class, 'simpanPendaftaran']);



Route::group(['middleware' => ['auth:user']], function () {
    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::get('/dashboard-asesi', [AsesiController::class, 'index'])->name('indexAsesi');
        Route::get('/dashboard-asesi/identitas', [AsesiController::class, 'viewProfile'])->name('profile');
        Route::get('/dashboard-asesi/ganti-password', [AsesiController::class, 'viewPassword'])->name('viewPassword');
        Route::post('/dashboard-asesi/simpan-password', [AsesiController::class, 'simpanPassword']);
        Route::get('/dashboard-asesi/apl',[AsesiController::class,'viewApl']);
        Route::get('/dashboard-asesi/apl-dua',[AsesiController::class,'viewApl2']);

    });
});

Route::group(['middleware' => ['auth:asesor']], function () {
    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::get('/dashboard-asesor', [AsesorController::class, 'index'])->name('indexAsesor');
        Route::get('/dashboard-asesor/skema-sertifikasi',[AsesorController::class,'viewSkema']);
        Route::post('/simpan-skema-sertifikasi',[SkemaController::class,'simpanSkema']);
        Route::post('/update-skema-sertifikasi',[SkemaController::class,'updateSkema']);
        Route::post('/hapus-skema-sertifikasi',[SkemaController::class,'hapusSkema']);
        Route::get('/dashboard-asesor/data-asesi',[AsesorController::class,'viewAsesi']);
        Route::get('/dashboard-asesor/data-pendaftar',[AsesorController::class,'viewPendaftar']);
        Route::get('/dashboard-asesor/identitas-asesi-{slug}',[AsesorController::class,'viewProfile']);
        Route::post('/dashboard-asesor/verifikasi-pendaftar-sertifikasi',[AsesorController::class,'verifikasiPendaftar']);
    });
});
