<?php

use App\Models\Pegawai;
use App\Models\JabatanPegawai;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanPegawaiController;

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
        'pegawai' => Pegawai::count(),
        'jabatan' => JabatanPegawai::count(),
        'purna' => Pegawai::where('kontraks_id', 3)->count(),
    ]);
});

Route::resource('/pegawai', PegawaiController::class);
Route::resource('/jabatan', JabatanPegawaiController::class);
Route::resource('/kontrak', KontrakController::class);

Route::get('/getjabatan', [JabatanPegawaiController::class, 'getJabatanData']);
Route::get('/getkontrak', [KontrakController::class, 'getKontrakData']);
