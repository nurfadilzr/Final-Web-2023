<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eCommerceController extends Controller
{
    public function regis(){
        return view('regis', ['title' => "Registrasi"]);
    }
    public function login(){
        return view('login', ['title' => "Login"]);
    }
}
