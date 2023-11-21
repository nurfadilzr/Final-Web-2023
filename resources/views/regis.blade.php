@extends('layouts/main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
</head>
<body>    
    <div class="container">
        <form method="POST">
            <h1 style="padding: 20px 0;">Daftar</h1>
            {{-- <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 30vh;"> --}}
                <div class="form-group">
                    <div class="col-md-4 mb-3">
                        <label for="formEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="formEmail" placeholder="example@email.com" required>               
                    </div>
                </div>
                    {{-- <div class="col-md-6 mb-3">
                        <label for="formNama">Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="form-control" id="formNama" placeholder="Robert Downey Jr." required>
                    </div> --}}
              
  
                <div class="form-group">
                    <div class="col-md-4 mb-3">
                        <label for="formUsername">Username</label>
                        <input type="text" name="username" class="form-control" id="formUsername" pattern="[a-z0-9]{6,10}" required>
                        <small id="usernamedHelpBlock" class="form-text text-muted">
                            Must be 6-10 characters long
                        </small>              
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 mb-3">
                        <label for="formPass">Password</label>
                        <input type="password" name="password" class="form-control" id="formPass" placeholder="xxxxxx" pattern="[a-z0-9]{6}" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Password must contain letters and numbers
                        </small>               
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 mb-3">
                        <label for="formKonfirPass">Konfirmasi Password</label>
                        <input type="password" name="konfirpass" class="form-control" id="formKonfirPass" pattern="[a-z0-9]{6}" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Please repeat your password
                        </small>               
                        <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Daftar</button>
                    </div>      
                </div>   
                
         
        </form>
        <p style="text-align: center;">Sudah punya akun?
            {{-- <span><a href="<?= BASE_URL . "login.php" ?>" class=""> Masuk disini</a></span> --}}
        </p>
    </div>
</body>
</html>