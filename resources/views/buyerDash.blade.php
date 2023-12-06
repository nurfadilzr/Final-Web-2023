@extends('layouts/main')
@include('partials/navbar')

<style>
   .container {
      /* margin: 50px 0; */
   }
</style>

@section('content')
<div class="container">

   <div class="row mb-3">
      <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

      <div class="col-md-6">
         <input id="name" type="text" class="form-control" name="name" value="{{ $buyer->name }}">
      </div>
   </div>

   <div class="row mb-3">
         <label for="address" class="col-md-4 col-form-label text-md-end">Address</label>

         <div class="col-md-6">
            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
         </div>                        
   </div>

   <div class="row mb-3">
      <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

      <div class="col-md-6">
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

         @error('email')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
         @enderror
      </div>
   </div>

   <div class="row mb-3">
      <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

      <div class="col-md-6">
         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror
         </div>
      </div>
   </div>
   @foreach ($buyer as $data)
   <p>Nama: {{ $data->name }}</p>
   <p>Alamat: {{ $data->address }}</p>
   <p>Email: {{ $data->email }}</p>
   <p>Password: {{ $data->password }}</p>
   <!-- Tambahkan informasi lain yang ingin ditampilkan -->
   @endforeach
</div>
@endsection