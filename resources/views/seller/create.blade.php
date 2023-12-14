@extends('layouts/main')
@include('partials/navbar')

@section('content')

<style>
    .create {
        margin-top: 100px;
    }

    .pro {
        font-family: poppins;
        font-weight: 600;
        font-size: 28px;
        color: #019267;
        margin-bottom: 20px;
    }
</style>

<div class="container create">
    <h2 class="pro">Tambah Produk</h2>
    <form action="{{ route('seller.create') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row mb-3">
            <label for="nama" class="col-md-4 col-form-label text-md-end">Nama Produk</label>

            <div class="col-md-4">
                <input id="nama" type="text" class="form-control" name="nama">
            </div>
        </div>

        <div class="row mb-3">
            <label for="deskripsi" class="col-md-4 col-form-label text-md-end">Deskripsi Produk</label>

            <div class="col-md-4">
                <input id="deskripsi" type="text" class="form-control" name="deskripsi">
            </div>
        </div>

        <div class="row mb-3">
            <label for="harga" class="col-md-4 col-form-label text-md-end">Harga Produk</label>

            <div class="col-md-4">
                <input id="harga" type="text" class="form-control" name="harga">
            </div>
        </div>

        <div class="row mb-3">
            <label for="stok" class="col-md-4 col-form-label text-md-end">Stok Produk</label>

            <div class="col-md-4">
                <input id="stok" type="text" class="form-control" name="stok">
            </div>
        </div>

        <div class="row mb-3">
            <label for="kategori" class="col-md-4 col-form-label text-md-end">Kategori Produk</label>

            <div class="col-md-4">
                <input id="kategori" type="text" class="form-control" name="kategori">
            </div>
        </div>

        <div class="row mb-3">
            <input type="file" name="photo">
            <button type="submit">Upload</button>
        </div>
    </form>

</div>

@endsection