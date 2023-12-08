@extends('layouts/main')
@include('partials/navbar')

@section('content')

<style>
   .detail {
      margin-top: 100px;
   }

   h5 {
      font-family: poppins;
      font-weight: 600;
      font-size: 24px;
   }

   p {
      font-family: poppins;
      font-weight: 400;
      font-size: 18px;
      margin-top: -5px;
   }

   .logo-plus {
      color: #019267;
      margin-top: 20px;
      /* padding: 20px; */
      /* margin: 10px 0; */
   }
   .logo-plus:hover {
      color: #e38455;
      
   }

   .btn-primary {
      background-color: #019267;
      /* color:#019267; */
   }
   .btn-primary:hover {
      background-color: #e38455;
   }
</style>

<div class="container detail">
   <table>
      <tr>
         <td><h5>{{ $product->nama }}</h5></td>
      </tr>
      <tr>
         <td><p>Deskripsi : {{ $product->deskripsi }}</p></td>
      </tr>
      <tr>
         <td><p>Harga: {{ $product->harga }}</p></td>
      </tr>
      <tr>
         <td><p>Stok : {{ $product->stok }}</p></td>
      </tr>
      <tr>
         <td><p>Kategori : {{ $product->kategori }}</p></td>
      </tr>
   </table>

   <a href="" class="logo-plus mr-3"><i class="fa-solid fa-cart-plus fa-2xl"></i></a>
   <a href="" class="logo-plus mr-3"><i class="fa-solid fa-heart-circle-plus fa-2xl"></i></a>

   <a href="{{ URL::previous() }}" class="btn btn-primary">Kembali</a>


</div>

@endsection