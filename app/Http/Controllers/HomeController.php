<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
        
    //     return view('homep', ['title' => "Home"]);
    // }

    public function index()
    {
        if (auth()->check()) {
            $user = auth()->user();

            if ($user->level == 'admin') {
                // Pengguna adalah admin, arahkan ke halaman dashboard admin
                return redirect('/dashboard-admin');
            } elseif ($user->level == 'buyer') {
                // Pengguna adalah buyer, arahkan ke halaman home buyer
                return redirect('/home-buyer');
            } elseif ($user->level == 'seller') {
                // Pengguna adalah seller, arahkan ke halaman home seller
                return redirect('/home-seller');
            }
        }
        // Pengguna belum login atau level otorisasi tidak dikenali, arahkan ke halaman home public user
        return view('homep', ['title' => "Home"]);
    }

}
