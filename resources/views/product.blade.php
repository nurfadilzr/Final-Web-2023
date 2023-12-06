@extends('layouts/main')
@extends('partials/navbar')

<style>
   .btn-our {
   background-color: #019267;
   color: #fff;
   display: flex;
   justify-content: center;
   align-items: center;
   margin: 80px 0;
   padding: 10px 0;
   font-family: poppins;
   font-weight: 600;
   font-size: 24px;
   text-align: center;
   text-decoration: none;
   border-radius: 10px;
}
</style>

@section('content')
<div class="container">
   <p class="btn-our">Our Products</p>

   {{-- <div class="row row-cols-1 row-cols-md-3">
      @foreach($products as $product)
      <div class="col">
        <div class="card h-100">
          <img src="" class="card-img-top" alt="{{ $product->nama }}">
          <div class="card-body">
            <h5 class="card-title">{{ $product->nama }}</h5>
            <p class="card-text">{{ $product->deskripsi }}</p>
            <p class="card-text">{{ $product->harga }}</p>
            <p class="card-text">{{ $product->stok }}</p>
          </div>
        </div>
      </div>
      @endforeach
   </div> --}}

   <div style="display: flex; flex-wrap: wrap; justify-content: center">
      @foreach($products as $product)
        <div class="card" style="width: 250px; margin: 5px 5px; ">
          <img src="" class="card-img-top" alt="{{ $product->nama }}">
          <div class="card-body">
            <h5 class="card-title">{{ $product->nama }}</h5>
            <p class="card-text">{{ $product->deskripsi }}</p>
            <p class="card-text">{{ $product->harga }}</p>
            <p class="card-text">{{ $product->stok }}</p>
          </div>
        </div>
      @endforeach
   </div>


   
</div>

@endsection