<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Toko;
use Illuminate\Http\Request;

class AdminTokoController extends Controller
{
    public function toko()
    {
    $toko = Toko::all();
    return view('admin.admin-toko', compact(['toko']));
    }
}
