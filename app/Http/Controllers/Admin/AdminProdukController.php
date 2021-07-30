<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminProdukController extends Controller
{
    public function produk()
    {
    $produk = Produk::all();
    return view('admin.admin-produk', compact(['produk']));
    }
}
