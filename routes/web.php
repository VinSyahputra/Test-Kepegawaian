<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanPegawaiController;
use App\Models\JabatanPegawai;

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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'jabatan' => JabatanPegawai::count(),
    ]);
});

Route::resource('/pegawai', PegawaiController::class);
Route::resource('/jabatan', JabatanPegawaiController::class);
Route::resource('/kontrak', KontrakController::class);
