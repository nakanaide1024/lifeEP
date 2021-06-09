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

//トップ画面の表示
Route::get('/',[EpisodeController::class,'index'])->name('top');
//マイページ画面の表示
Route::get('/mypage/{id}',[EpisodeController::class, 'show'])->name('show');


//エピソード投稿画面の表示
Route::get('/new',[EpisodeController::class, 'new'])->name('new');
//エピソード登録
Route::post('/create',[EpisodeController::class, 'exeStore'])->name('create');
//エピソード編集画面の表示
Route::get('/edit/{id}',[EpisodeController::class, 'edit'])->name('edit');
//エピソード編集
Route::post('/update',[EpisodeController::class, 'exeUpdate'])->name('update');
//エピソード削除
Route::post('/delete/{id}',[EpisodeController::class, 'exeDelete'])->name('delete');


//ログイン画面の表示
Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
//ゲストログイン
Route::get('guest', [LoginController::class,'guestLogin'])->name('guest');
//ログイン
Route::post('login', [LoginController::class,'login']);
//ログアウト
Route::post('logout', [LoginController::class,'logout'])->name('logout');


//新規登録画面の表示
Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');
//新規登録
Route::post('register', [RegisterController::class,'register']);
