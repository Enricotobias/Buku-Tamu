<?php

use App\Http\Controllers\anggotaController;
use App\Http\Controllers\Nonanggota;
use App\Http\Controllers\nonmember;
use App\Http\Controllers\nonmember_metaverse;
use App\Http\Controllers\nonmember_pameran;
use App\Http\Controllers\rombongancontroller;
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
    return view('landing');
});


Route::resource('nonmember', Nonanggota::class);
Route::resource('nonmember_pameran', nonmember_pameran::class);
Route::resource('nonmember_metaverse', nonmember_metaverse::class);

Route::get('rombongan', [rombongancontroller::class, 'Addrombongan'])->name('rombongan');
Route::view('rombo-metaverse','rombongan.metaverse');
Route::view('rombo-pameran','rombongan.pameran');
Route::view('rombo-pusling','rombongan.perpusling');
Route::post('rombo', [rombongancontroller::class,'Addrombongan']);
Route::get('rombo-metaverse', [rombongancontroller::class, 'createMeta'])->name('rombongan.create');

Route::get('anggota', [anggotaController::class, 'nambahAnggota'])->name('anggota');
Route::view('member-metaverse', 'anggota.metaverse');
Route::view('member-pameran', 'anggota.pameran');
Route::view('member-pusling', 'anggota.perpusling');
Route::post('anggota', [anggotaController::class, 'nambahAnggota']);
