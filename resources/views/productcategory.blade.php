@extends('layouts/main')
@include('partials/navbar')

@section('content')

<div class="container">
    @foreach ($product as $products)
    <h5>{{ $products->nama }}</h5>
    @endforeach
</div>

@endsection