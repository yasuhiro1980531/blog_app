<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
//ブログ一覧画面を表示
//ルートの名前はformのactionに設定
Route::get('/', [BlogController::class, 'showList'])->name('blogs');

//ブログ登録画面の表示
Route::get('/blog/create',[BlogController::class, 'showCreate'])->name('create');
//ブログ登録
Route::post('/blog/store',[BlogController::class, 'exeStore'])->name('store');

//ブログの詳細画面を表示
Route::get('/blog/{id}',[BlogController::class, 'showDetail'])->name('show');

//ブログの編集画面を表示
Route::get('/blog/edit/{id}',[BlogController::class, 'showEdit'])->name('edit');

Route::post('/blog/update',[BlogController::class, 'exeUpdate'])->name('update');

Route::post('/blog/delete/{id}',[BlogController::class, 'exeDelete'])->name('delete');


