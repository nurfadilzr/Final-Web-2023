@extends('layouts/main')
@include('partials/navbar')

@section('content')

<style>
    .kategori {
        margin-top: 80px;
      
    }

    .card {
        width: 250px; 
        margin: 5px 5px;
    }

    h5 {
        margin-bottom: 50px;
    }
</style>

{{-- <div class="container kategori">
    <h5>Kategori : {{ $productCategory }}</h5>
    @if (!empty($product))
        @foreach ($product as $products)
        <p>{{ $products->nama }}</p>
        @endforeach
    @else 
        <p>No products found.</p>
    @endif
</div> --}}

<div class="container kategori" style="display: flex; flex-wrap: wrap; justify-content: center">
    @if (!empty($product))
    <h5>Kategori : {{ $productCategory }}</h5>
        @foreach($product as $singleProduct)
        <div class="card">
            <img src="" class="card-img-top" alt="{{ $singleProduct->nama }}">
            <div class="card-body">
                <a class="card-title" href="{{ route('products.show', $singleProduct->nama) }}">{{ $singleProduct->nama }}</a> 
                {{-- <p class="card-text">{{ $product->deskripsi }}</p> --}}
                <p class="card-text">Harga: Rp{{ $singleProduct->harga }}</p>
                {{-- {{-- <p class="card-text">Stok: {{ $products->stok }}</p> --}}
            </div>
        </div>
        @endforeach
    @else
        <p>No products found.</p>
    @endif
 </div>

@endsection