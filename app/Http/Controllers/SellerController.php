<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{

    public function profile()
    {
        $seller = User::all(); // Mengambil semua data pembeli dari tabel

        return view('buyerDash', ['seller' => $seller, 'title' => "Seller Dashboard"]);
    }

    // public function upload(Request $request)
    // {
    //     $photo = $request->file('photo');

    //     // Simpan foto ke dalam database
    //     $product = new Product;
    //     $product->photo = file_get_contents($photo);
    //     $product->save();

    //     return redirect()->back()->with('success', 'Foto berhasil diunggah');
    // }

    public function store(Request $request)
    {

        // Validasi input
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'foto' => 'required|image|max:2048', // Batasan ukuran foto 2MB
        ]);

        if ($request->hasFile('photo')) {
            if ($request->photo) {
                // Storage::delete($request->photo);
            }

            $path = $request->file('photo')->store("photo");
            $request->photo = $path;
        }
        // Simpan foto ke dalam direktori yang diinginkan
        // $foto = $request->file('foto');
        // $path = $foto->store('public/foto_produk');

        // Simpan informasi produk ke dalam database
        // $produk = new Product;
        // $produk->nama = $request->nama;
        // $produk->nama = $request->deskripsi;
        // $produk->harga = $request->harga;
        // $produk->stok = $request->stok;
        // $produk->foto = $request->photo;
        // $produk->save();

        Product::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'foto' => $request->photo,
        ]);

        // Berikan respons atau lakukan tindakan lain yang diperlukan
        // return response()->json(['message' => 'Produk berhasil diupload'], 201);
        return view('/');
    }

}
