<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisBuyerController extends Controller
{
    protected $redirectTo = '/home';

    // public function validator(Request $request)
    // {
    //     return Validator::make($request->all(), [
    //         'email' => ['required', 'string', 'email', 'max:255'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'name' => ['required', 'string', 'max:255'],
    //         'address' => ['required', 'string', 'max:255'], // Validasi untuk alamat
    //     ]);
    // }

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
        Buyer::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'nama' => $request['name'],
            'alamat_pengiriman' => $request['address'], // Menyimpan data alamat
        ]);
      
        return redirect('login');
    }
}
