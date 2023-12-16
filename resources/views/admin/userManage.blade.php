@extends('layouts/main')
@include('partials/navbar')


@section('content')

<style>
    .data {
        margin-top: 80px;
    }

    tr {
        column-gap: 20px;
    }
</style>

<div class="container data">
    <h2>Data Pengguna</h2>

    <table>
        <h3>Data Buyer</h3>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat Pengiriman</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buyer as $buyer)
            <tr>
                <td>{{ $buyer->nama }}</td>
                <td>{{ $buyer->alamat_pengiriman }}</td>
                <td>{{ $buyer->email }}</td>
                <td>{{ $buyer->password }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>

    <table>
        <h3>Data Seller</h3>
        <thead>
            <tr>
                <th>Nama Toko</th>
                <th>Alamat Toko</th>
                <th>Email</th>
                <th>Password</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($seller as $seller)
            <tr>
                <td>{{ $seller->nama_toko }}</td>
                <td>{{ $seller->alamat_toko }}</td>
                <td>{{ $seller->email }}</td>
                <td>{{ $seller->password }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection