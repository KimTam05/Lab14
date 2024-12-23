<?php

use App\Http\Controllers\KNTLoaiSPController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kntloaisanpham', [KNTLoaiSPController::class, 'show'])->name('kntloaisanpham.kntshow');
Route::get('/kntloaisanpham/create', [KNTLoaiSPController::class, 'create'])->name('kntloaisanpham.kntcreate');
Route::post('/kntloaisanpham/create', [KNTLoaiSPController::class, 'store']);
Route::get('kntloaisanpham/{id}/edit', [KNTLoaiSPController::class, 'edit'])->name('kntloaisanpham.kntedit');
Route::post('kntloaisanpham/{id}/edit', [KNTLoaiSPController::class, 'update'])->name('kntloaisanpham.kntupdate');
Route::delete('kntloaisanpham/{id}/delete', [KNTLoaiSPController::class, 'delete'])->name('kntloaisanpham.kntdelete');
