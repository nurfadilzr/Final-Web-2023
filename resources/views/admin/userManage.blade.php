@extends('layouts/main')
@include('partials/navbar')

@section('content')

<div class="container profile">
   <h2 class="pro">User Management</h2>

   <h1>Data Pengguna</h1>

    <h2>Data Buyer</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat Pengiriman</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buyers as $buyer)
                <tr>
                    <td>{{ $buyer->nama }}</td>
                    <td>{{ $buyer->alamat_pengiriman }}</td>
                    <td>{{ $buyer->email }}</td>
                    <td>{{ $buyer->password }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Data Seller</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Toko</th>
                <th>Alamat Toko</th>
                <th>Email</th>
                <th>Password</th>
                <!-- tambahkan kolom lain yang ingin ditampilkan -->
            </tr>
        </thead>
        <tbody>
            @foreach ($sellers as $seller)
                <tr>
                    <td>{{ $seller->nama_toko }}</td>
                    <td>{{ $seller->alamat_toko }}</td>
                    <td>{{ $seller->email }}</td>
                    <td>{{ $seller->password }}</td>
                    <!-- tambahkan kolom lain yang ingin ditampilkan -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection