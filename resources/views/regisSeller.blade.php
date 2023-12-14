@extends('layouts/main')

@section('content')

<div class="container" >
   <h1 style="padding: 20px 0; text-align: center;">{{ $welcome }}</h1>
   <form method="POST" action="/regisSeller">
   @csrf
      
      @if ($errors->any())
         <div class="alert alert-danger">
            <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
            </ul>
         </div>
      @endif
      <div class="form-row mb-4">
         <div class="col-md-6 mb-3">
            <label for="formName">Nama Toko</label>
            <input type="text" name="name" class="form-control" id="formName" required>               
         </div>
         <div class="col-md-6 mb-3">
            <label for="formAddress">Alamat Toko</label>
            <input type="text" name="address" class="form-control" id="formAddress" required>            
         </div>
      </div>

      <div class="form-row">  
         <div class="col-md-4 mb-3">
            <label for="formEmail">Email</label>
            <input type="email" name="email" class="form-control" id="formEmail" placeholder="example@email.com" required>               
         </div> 
         <div class="col-md-4 mb-3">
            <label for="formPass">Password</label>
            <input type="password" name="password" class="form-control" id="formPass" required>
            <small id="passwordHelpBlock" class="form-text text-muted">
               Password must contain letters and numbers
            </small>               
         </div> 
         <div class="col-md-4 mb-3">
            <label for="formKonfirPass">Konfirmasi Password</label>
            <input type="password" name="konfirpass" class="form-control" id="formKonfirPass" required>
            <small id="passwordHelpBlock" class="form-text text-muted">
               Please repeat your password
            </small>               
         </div>      
      </div>  

      <button class="btn btn-primary" style="margin-top: 10px; text-align: center;" type="submit">Daftar</button>
   </form>

   {{-- <a href="/home" class="btn btn-primary" style="margin-top: 10px;">Daftar</a>    --}}
   <p style="margin-top: 5px">Sudah punya akun?
      <span><a href="/login" class=""> Masuk disini</a></span>
   </p>
</div>
@endsection

