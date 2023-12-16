<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use App\Models\Seller;


class AdminController extends Controller
{
    public function index()
    {
        $buyer = Buyer::all();
        $seller = Seller::all();

        return view('admin.userManage', ['title' => "Admin Dashboard", 'buyer' => $buyer, 'seller' => $seller,], compact('buyer', 'seller'));
    }

    
}
