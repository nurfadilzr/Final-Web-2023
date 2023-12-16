<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginBuyerController extends Controller
{
    public function login()
    {
        return view('login', ['title' => "Login"]);
    }
    
    public function loginBuyer(Request $request) 
    {
        $validated = $request->validate( [
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);


        // return view('buyer.homeb', ['title' => "Home"] );
        return redirect('/home-buyer');
    }
}
