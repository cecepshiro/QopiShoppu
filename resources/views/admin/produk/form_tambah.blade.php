@extends('layouts.dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Data Produk</h1>
    <p class="mb-4">Halaman ini untuk mengelola data produk.</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Produk</h6>
        </div>
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ url('admin/produk/store') }}"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Nama Produk</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nama_produk" autofocus required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Kategori</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="id_kategori" required>
                                <option value="">Pilih Kategori</option>
                                @foreach($kategori as $row)
                                     <option value="{{ $row->id_kategori }}">{{ $row->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Deskripsi</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" name="deskripsi" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Harga</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="harga"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Berat</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="berat"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Stok</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="stok"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Gambar</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" name="file" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <a href="{{ url('admin/produk/index/') }}" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

</div>
@endsection
