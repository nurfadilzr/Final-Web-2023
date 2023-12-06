@extends('layouts/main')
@include('partials/navbar')

@section('content')
<ul>
    @foreach ($product as $products)
    <li>{{ $product->name }}</li>
    @endforeach
</ul>
@endsection