@extends('layouts/main')

@section('content')
    <div class="container" style="display: flex; justify-content: center; margin-top: 50px;">   
        <div class="form-group col-md-6">
        <h2>Login</h2>
        <form method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form> <br>
        <p>Belum punya akun? <span>
            <div class="a-container">
                {{-- <a href="<?= BASE_URL . "regisadm.php" ?>" class=""> Daftar sebagai admin</a> <br>
                <a href="<?= BASE_URL . "regismhs.php" ?>" class=""> Daftar sebagai mahasiswa</a> --}}
            </div>
        </span></p>
        </div>
    </div>
@endsection