<?php

use App\Http\Controllers\dailylog\BlogController;
use App\Http\Controllers\dailylog\LoginController;
use App\Http\Controllers\helloworld\HelloWorldController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kinerja\KinerjaController;
use App\Http\Controllers\provinsi\ProvinsiController;
use App\Http\Controllers\dailylog\UserController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
// Soal 1
Route::resource('/user', UserController::class)->names([
	'index' => 'user.index',
]);
Route::middleware(['auth', 'preventbackhistory'])->group(function () {
	Route::resource('/log', BlogController::class)->names([
		'index' => 'log.index',
		'create' => 'log.create',
		'store' => 'log.store',
		'show' => 'log.show'
	]);
	Route::post('/log/{id}/accept', [BlogController::class, 'accept'])->name('accept');
	Route::post('/log/{id}/reject', [BlogController::class, 'reject'])->name('reject');
	Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
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
