@extends('layouts/main')
@include('partials/navbar')

@section('content')

<div class="container">
    <form action="{{ route('seller.create') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <label for="nama" class="col-md-4 col-form-label text-md-end">Nama Produk</label>
   
            <div class="col-md-4">
               <input id="nama" type="text" class="form-control" name="name">
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
            <label for="stok" class="col-md-4 col-form-label text-md-end">Harga Produk</label>
   
            <div class="col-md-4">
               <input id="stok" type="text" class="form-control" name="harga">
            </div>
        </div>

        <div class="row mb-3">
            <input type="file" name="photo">
            <button type="submit">Upload</button>
        </div>
    </form>
      
</div>

@endsection