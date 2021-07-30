@extends('layout.base')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table>
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Toko</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($produk as $produk)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $produk->produk }}</td>
                                                    <td>{{ $produk->toko->toko }}</td>
                                                    <td>{{ $produk->kategori->kategori }}</td>
                                                    <td>{{ $produk->harga }}</td>
                                                    <td>{{ $produk->stok }}</td>
                                                    <td>{{ $produk->deskripsi }}</td>
                                                    <td>{{ $produk->created_at }}</td>
                                                    {{-- <td>
                                                <a href="/categories/{{$kategori->id_kategori}}/edit">Edit</a>
                                                <form action="/categories/{{$kategori->id_kategori}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="submit" value="Delete">
                                                </form>
                                            </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    @endsection
