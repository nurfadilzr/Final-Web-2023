@extends('layouts/main')

@section('content')
   <div class="container" style="display: flex; justify-content: center; margin-top: 50px;">   
      <div class="form-group col-md-6">
         <h2>Login</h2>
         <form method="POST" action="/login">
            @csrf

            {{-- @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                        @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                  </ul>
               </div>
            @endif --}}
            <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                  @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
               </div>
            <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                  @error('password')
                     <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
               </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
         </form> <br>
         <p>Belum punya akun? <span>
            <div class="a-container">
                  <a href="/regisBuyer" class=""> Daftar sebagai Pembeli</a> <br> 
                  <a href="/regisSeller" class=""> Daftar sebagai Penjual</a>
            </div>
         </span></p>
      </div>
   </div>
@endsection