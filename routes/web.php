<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
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
    return view('welcome');
});

Route::get('/sdgs', function () {
    return view('intro_sdgs');
});

Route::get('/businesses', [BusinessController::class, 'index'])->name('business.index');

// 儲存一筆資料
Route::post('businesses/store', [BusinessController::class, 'store'])->name('business.store');
# 新增表單
Route::get('businesses/create', [BusinessController::class, 'create'])->name('business.create');
# 查詢資料
Route::get('businesses', [BusinessController::class, 'index'])->name('business.index');
# 顯示特定一筆資料的詳細資料
Route::get('businesses/{id}', [BusinessController::class, 'show'])->where('id', '[0-9]+')->name('business.show');
# 編輯特定一筆資料
Route::get('businesses/{id}/edit', [BusinessController::class, 'edit'])->where('id', '[0-9]+')->name('business.edit');
# 刪除特定一筆資料
Route::delete('businesses/delete/{id}', [BusinessController::class, 'destroy'])->where('id', '[0-9]+')->name('business.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::patch('businesses/{id}/update', [BusinessController::class, 'update'])->where('id', '[0-9]+')->name('business.update');
