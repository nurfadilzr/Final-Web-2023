<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product', compact(['products']), ['title' => "Products"]);
    }

    public function search(Request $request){
        // Kelas Request untuk mengakses dan memanipulasi data permintaan HTTP yang diterima oleh aplikasi. Dalam hal ini, $request digunakan untuk mengambil input productLine yang dikirimkan oleh pengguna 
        $productCategory = $request->input('kategori');

        // mencocokkan productLine dri db dgn productline inputan, jika ada yg cocok taruh di variabel
        $products = Product::where('kategori', $productCategory)->get();
        // dd($products->all());

        if ($products-> isempty()){
            $pesan="tidak ada data";
            echo "<script>alert('$pesan')</script>";
        }

        return view('productcategory', ['product' => $products, 'title' => "Category"]);
    }

    public function showProduct($productName) {
        // mencari productName yg sama dan ambil hasil pencarian pertama
        $products = Product::where('nama', $productName)->first();

        return view('show', ['product' => $products]);
    }
}
