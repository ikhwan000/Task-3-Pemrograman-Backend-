<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriControllerr;
use App\Http\Controllers\SiswaControllerr;

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
    return view('welcome');
});

Route::get('/salam', function () {
    return "Assalamu'alikum Sobat, Selamat Belajar Laravel";
});

//routing parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//routing view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

//routing data santri
Route::get('/santri', [SantriControllerr::class, 'dataSantri']
);

//routing data siswa
Route::get('/siswa', [SiswaControllerr::class, 'dataSiswa']
);