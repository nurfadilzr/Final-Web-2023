<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SellerController extends Controller
{

    public function index()
    {
        // $seller = User::all(); // Mengambil semua data pembeli dari tabel

        return view('seller.create', ['title' => "Upload Product"]);
    }

    public function profile()
    {
        $seller = Seller::all(); // Mengambil semua data pembeli dari tabel

        return view('seller.profileSeller', ['seller' => $seller, 'title' => "Seller Dashboard"]);
    }

    public function updateSeller(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Find the seller by ID
        $seller = Seller::find($id);

        // Update the seller's data
        $seller->nama_toko = $request->name;
        $seller->alamat_toko = $request->address;
        $seller->email = $request->email;
        $seller->password = Hash::make($request->password); // Remember to hash the password

        $seller->save(); // Save the updated data

        // dd($seller);
        // Redirect or return a response as needed
        return view('seller.profileSeller', ['title' => "Seller Dashboard", 'seller' => $seller]);
    }


    public function store(Request $request)
    {

        // Validasi input
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori' => 'required',
            'photo' => 'required|image|max:2048', // Batasan ukuran foto 2MB
        ]);

        // if ($request->hasFile('photo')) {

        //     // if ($request->photo) {
        //     //     // Storage::delete($request->photo);
        //     // }

        //     $path = $request->file('photo')->store('public/img');
        //     // $product->foto = $path;
        //     // $product->save();
        //     $request->photo = $path;
        // }else{
        //     return redirect('login');
        // }


        // Simpan foto ke dalam direktori yang diinginkan
        $foto = $request->file('photo');
        $path = $foto->store('product-image');

        // Simpan informasi produk ke dalam database
        $produk = new Product;
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->kategori = $request->kategori;
        $produk->foto = $path;
        $produk->id_seller = 1;
        $produk->save();

        // Product::create([
        //     'nama' => $request->nama,
        //     'deskripsi' => $request->deskripsi,
        //     'harga' => $request->harga,
        //     'stok' => $request->stok,
        //     'kategori' => $request->kategori,
        //     'foto' => $request->path,
        //     'id_seller' => 1,
            
        // ]);

        $products = Product::all();

        // var_dump($products);
        // Berikan respons atau lakukan tindakan lain yang diperlukan
        // return response()->json(['message' => 'Produk berhasil diupload'], 201);
        return view('product', ['title' => "Products", 'products' => $products]);
    }

}
