<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eCommerceController extends Controller
{
    public function regisBuyer(){
        return view('regisBuyer', ['title' => "Registrasi", 'welcome' => "Daftar Sebagai Pembeli"]);
    }
    public function regisSeller(){
        return view('regisSeller', ['title' => "Registrasi", 'welcome' => "Daftar Sebagai Penjual"]);
    }
    public function login(){
        return view('login', ['title' => "Login"]);
    }
    public function home(){
        return view('homep', ['title' => "Home"]);
    }
}
