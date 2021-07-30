<?php

use App\Http\Controllers\Admin\AdminKategoriController;
use App\Http\Controllers\admin\AdminProdukController;
use App\Http\Controllers\admin\AdminTokoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/kategori', [AdminKategoriController::class, 'index']);
Route::get('/kategori/add',AdminKategoriController::class, 'create');
Route::post('/kategori/store', [AdminKategoriController::class, 'store'])->name('admin.addkategori');

Route::get('/toko', [AdminTokoController::class, 'toko']);
Route::get('/produk', [AdminProdukController::class, 'produk']);
// Route::get('/adminproduk', function () {
//     return view('admin.admin-produk');
// });

// Route::resource('/produk', ProdukController::class,'produk');
