<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    public function kategori()
    {
    $kategori = Kategori::all();
    return view('admin.admin-kategori', compact(['kategori']));
    }

    public function __invoke(Request $request)
    {

    }

    public function add()
    {
            $kategori = new Kategori();
            $kategori->kategori = $this->kategori;
			$kategori->save();

        return redirect ('admin/admin-kategori')->with('pesan', 'Data berhasil disimpan..');
    }

    public function deleteKategori($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        session()->flash('message','Kategori berhasil dihapus');
    }
}
