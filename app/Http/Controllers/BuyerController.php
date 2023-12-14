<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
    public function index()
    {
        return view('buyer.homeb', ['title' => "Home"]);
    }

    public function profile()
    {
        $buyer = User::all(); // Mengambil semua data pembeli dari tabel

        return view('buyerDash', ['buyer' => $buyer, 'title' => "Buyer Dashboard"]);
    }

    public function update(Request $request)
    {
        $buyer = User::find(Auth::id()); // Mengambil data pengguna yang sedang login

        $buyer->name = $request->input('name');
        $buyer->address = $request->input('address');
        $buyer->email = $request->input('email');
        // $buyer->password = Hash::make($request->input('password'));

        $buyer->save(); // Menyimpan perubahan ke database

        return redirect()->back()->with('success', 'Data berhasil diperbarui'); // Mengalihkan kembali ke halaman profile dengan pesan sukses
    }

}
