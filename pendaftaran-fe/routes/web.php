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

Route::get('dashboard', function (){
    return view('dashboard');
});

Route::resource('dashboard/pasien', \App\Http\Controllers\DataPasienController::class);


Route::get('dashboard/pendaftaran/form', [\App\Http\Controllers\DataPendaftaranController::class, 'form']);
Route::resource('dashboard/pendaftaran' , \App\Http\Controllers\DataPendaftaranController::class);
Route::resource('dashboard/dokter', \App\Http\Controllers\DataDokterController::class);
Route::resource('dashboard/jadwal', \App\Http\Controllers\JadwalDokterController::class);
