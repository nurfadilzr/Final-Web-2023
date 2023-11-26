@extends('layouts/main')

@section('content')

<div class="container" >
   <h1 style="padding: 20px 0; text-align: center;">{{ $welcome }}</h1>
   <form method="POST">

      <div class="form-row mb-4">
         <div class="col-md-6 mb-3">
            <label for="formEmail">Email</label>
            <input type="email" name="email" class="form-control" id="formEmail" placeholder="example@email.com" required>               
         </div>
         <div class="col-md-6 mb-3">
            <label for="formName">Nama Toko</label>
            <input type="text" name="nama" class="form-control" id="formName" required>               
         </div>
      </div>
      
      <div class="form-row mb-4">
         <div class="col-md-6 mb-3">
            <label for="formTelephone">No. Telepon</label>
            <input type="phone" name="telephone" class="form-control" id="formTelephone" pattern="[0-9]{11,13}" required>            
         </div>
         <div class="col-md-6 mb-3">
            <label for="formAddress">Alamat Toko</label>
            <input type="text" name="address" class="form-control" id="formAddress" required>            
         </div>
      </div>

      <div class="form-row">
         <div class="col-md-4 mb-3">
            <label for="formUsername">Username</label>
            <input type="text" name="username" class="form-control" id="formUsername" pattern="[a-z0-9]{6,10}" required>
            <small id="usernamedHelpBlock" class="form-text text-muted">
               Must be 6-10 characters long
            </small>              
         </div>      
         <div class="col-md-4 mb-3">
            <label for="formPass">Password</label>
            <input type="password" name="password" class="form-control" id="formPass" placeholder="xxxxxx" pattern="[a-z0-9]{6}" required>
            <small id="passwordHelpBlock" class="form-text text-muted">
               Password must contain letters and numbers
            </small>               
         </div> 
         <div class="col-md-4 mb-3">
            <label for="formKonfirPass">Konfirmasi Password</label>
            <input type="password" name="konfirpass" class="form-control" id="formKonfirPass" pattern="[a-z0-9]{6}" required>
            <small id="passwordHelpBlock" class="form-text text-muted">
               Please repeat your password
            </small>               
         </div>      
      </div>  

   </form>

   {{-- <button class="btn btn-primary" style="margin-top: 10px; text-align: center;" type="submit">Daftar</button> --}}
   <a href="" class="btn btn-primary" style="margin-top: 10px;">Daftar</a>   
   <p style="margin-top: 5px">Sudah punya akun?
      {{-- <span><a href="<?= BASE_URL . "login.php" ?>" class=""> Masuk disini</a></span> --}}
   </p>
</div>
@endsection

