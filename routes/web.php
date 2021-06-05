<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\EpisodeController;


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

Route::get('/',[EpisodeController::class,'index'])->name('top');
Route::get('/mypage',[EpisodeController::class, 'show'])->name('show');

Route::get('/new',[EpisodeController::class, 'new'])->name('new');
Route::post('/create',[EpisodeController::class, 'exeStore'])->name('create');
Route::get('/edit/{id}',[EpisodeController::class, 'edit'])->name('edit');
Route::post('/update',[EpisodeController::class, 'exeUpdate'])->name('update');

Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login']);
Route::post('logout', [LoginController::class,'logout'])->name('logout');

Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class,'register']);
