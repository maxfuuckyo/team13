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

Route::get('/businesses', [BusinessController::class, 'index'])->name('businesses.index');

Route::get('businesses/{id}', [BusinessController::class, 'show'])->where('id', '[0-9]+')->name('businesses.show');
Route::get('businesses/{id}/edit', [BusinessController::class, 'edit'])->where('id', '[0-9]+')->name('businesses.edit');
Route::delete('businesses/delete/{id}', [BusinessController::class, 'destroy'])->where('id', '[0-9]+')->name('businesses.destroy');