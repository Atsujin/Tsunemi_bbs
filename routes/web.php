<?php

use App\Http\Controllers\BbsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('bbs.index');
// });

Route::get('/', [BbsController::class, 'index'])->name('index');

//投稿フォーム
Route::get('/create', function() {
    return view('bbs.create');
});

//投稿
Route::post('/store', [BbsController::class, 'store'])->name('store');
//投稿一覧
Route::get('/show', [BbsController::class, 'show'])->name('show');
Route::delete('/destroy{id}', [BbsController::class, 'destroy'])->name('destroy');

//ログイン
Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::post('/users/login', [AuthController::class, 'login'])->name('users.login');
Route::post('/users/logout', [AuthController::class, 'logout'])->name('users.logout');

Route::get('/admin', function() {
    return view('admin.introduction');
});

//スレッド
Route::get('/thread/create', [ThreadController::class, 'create'])->name('thread.create');
Route::post('/thread/store', [ThreadController::class, 'store'])->name('thread.store');
Route::get('/thread/show{id}', [ThreadController::class, 'show'])->name('thread.show');
Route::get('/thread/{id}/edit', [ThreadController::class, 'edit'])->name('thread.edit');
Route::post('/thread/{id}/update', [ThreadController::class, 'update'])->name('thread.update');
Route::delete('/thread/{id}/destroy', [ThreadController::class, 'destroy'])->name('thread.destroy');


