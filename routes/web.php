<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', function () {
    return view('tampilanawal');
});*/
//route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
//Route::post('/mahasiswa', 'MahasiswaController@store')->name('mahasiswa.store');
//route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');

Route::resource('mahasiswa', MahasiswaController::class);