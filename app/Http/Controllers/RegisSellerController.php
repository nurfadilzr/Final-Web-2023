<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisSellerController extends Controller
{
    public function create(Request $request)
    {

        // Menambahkan nilai default 'buyer' jika role tidak ada
        // $role = isset($data['role']) ? $data['role'] : 'buyer';

        $validated = $request->validate( [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'], // Validasi untuk alamat
        ]);

        // if ($this->validator($request)->fails()) {
            Seller::create([
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'nama_toko' => $request['name'],
                'alamat_toko' => $request['address'], // Menyimpan data alamat
            ]);
        
        return redirect('login');
    }
}
