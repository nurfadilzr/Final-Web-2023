@extends('layouts/main')
@include('partials/navbar')

<style>
   .profile {
      margin-top: 100px;     
   }
   .pro {
      font-family: poppins;
      font-weight: 600;
      font-size: 28px;
      color: #019267;
      margin-bottom: 20px;
   }
   .form-control {
      margin-left: -50px;
   }
   .btn {
      color: #019267;
   }
</style>

@section('content')
<div class="container profile">
   <h2 class="pro">Profile Management</h2>
   <form class="" role="search" method="POST" action="{{ route('profile.update') }}">
      @foreach ($buyer as $data)
      <div class="row mb-3">
         <label for="name" class="col-md-4 col-form-label text-md-end">Nama</label>

         <div class="col-md-4">
            <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}">
         </div>
      </div>

      <div class="row mb-3">
            <label for="address" class="col-md-4 col-form-label text-md-end">Alamat Pengiriman</label>

            <div class="col-md-4">
               <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $data->address }}" required autocomplete="address">
            </div>                        
      </div>

      <div class="row mb-3">
         <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

         <div class="col-md-4">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email">
         </div>
      </div>

      <div class="row mb-3">
         <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

         <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
         </div>
         </div>
         <button type="submit" class="btn btn-success btn-sm">Ubah</button>
      </div>

      @endforeach
   </form>
</div>
@endsection