<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BukuController;

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
    return view('login');
});

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'login'])->name('login.proses')->middleware('guest');
Route::get('/logout',[LoginController::class, 'index'])->name('logout');
Route::get('/home',[ContenController::class, 'index'])->name('home.index')->middleware('auth');
Route::get('/contak',[ContenController::class, 'contak']);
Route::resource('mapel', MapelController::class)->middleware('auth');

Route::get('changepassword',[UserController::class,'ShowChangePasswordForm'])->middleware('auth');
Route::post('changepassword',[UserController::class,'changepassword'])->Name('changepassword')->middleware('auth');

Route::resource('siswa', SiswaController::class);
Route::resource('buku', BukuController::class);