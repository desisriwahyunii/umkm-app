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
                                    {{-- <a href="" class="btn btn-success pull-right">Tambah
                                    Kategori</a> --}}

                                    <div class="right">
                                        <a type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#exampleModal">
                                            Tambah Kategori
                                        </a>
                                        {{-- <a href="{{ route('admin.addkategori') }}" class="btn btn-success pull-right">Tambah
                                        Kategori</a> --}}
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ route('admin.addkategori') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        {{ csrf_field() }}

                                                        <div class="mb-3">
                                                            <label for="kategori" class="form-label">Nama Kategori</label>
                                                            <input name="kategori" type="text" class="form-control"
                                                                id="kategori" aria-describedby="kategori">
                                                        </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <a type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</a>
                                                    <button type="submit" class="btn"><i
                                                            class="lnr lnr-plus-circle"></i>Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir Modal -->
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Kategori</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                @foreach ($kategori as $kategori)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $kategori->kategori }}</td>
                                                        <td>
                                                            <a href="">
                                                                <i class="fa fa-edit"></i></a>
                                                            <a href=""
                                                                onclick="confirm('Apakah Anda yakin?') || event.stopImmediatePropagation()"
                                                                wire:click.prevent="deleteKategori({{ $kategori->id }})"
                                                                style="margin-left:10px;"><i
                                                                    class="fa fa-times fa 2x text-danger"></i></a>
                                                            </form>
                                                        </td>
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
