<?php

use App\Http\Controllers\helloworld\HelloWorldController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kinerja\KinerjaController;
use App\Http\Controllers\provinsi\ProvinsiController;
use App\Http\Controllers\UserController;
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
// Route::get('/', [HomeController]);
Route::get('/', [HomeController::class, 'index'])->name('home');
// Soal 1
Route::get('/list-user', [UserController::class, ''])->name('list-user');
// Soal 2
Route::resource('/api/provinsi', ProvinsiController::class)->names([
	'index' => 'provinsi.index',
	'create' => 'provinsi.create',
	'store' => 'provinsi.store',
	'show' => 'provinsi.show',
	'edit' => 'provinsi.edit',
	'update' => 'provinsi.update',
	'destroy' => 'provinsi.destroy'
]);
// Soal 3
Route::get('/predikat-kinerja', [KinerjaController::class, 'index'])->name('kinerja');
Route::post('/predikat-kinerja/check', [KinerjaController::class, 'predikat_kinerja'])->name('kinerja.check');
// Soal 4
Route::get('/helloworld', [HelloWorldController::class, 'index'])->name('helloworld');
Route::post('/helloworld/check', [HelloWorldController::class, 'helloworld'])->name('helloworld.check');
