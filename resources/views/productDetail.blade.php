@extends('layouts/main')
@include('partials/navbar')

@section('content')

<table>
   <tr>
      <td>{{ $products->nama }}</td>
   </tr>
   <tr>
      <td>{{ $products->deskripsi }}</td>
   </tr>
   <tr>
      <td>{{ $products->harga }}</td>
   </tr>
   <tr>
      <td>{{ $products->stok }}</td>
   </tr>
</table>

@endsection