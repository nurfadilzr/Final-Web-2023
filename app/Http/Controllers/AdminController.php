<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use App\Models\Seller;


class AdminController extends Controller
{
    public function index()
    {
        $buyers = Buyer::all();
        $sellers = Seller::all();

        return view('admin.userManage', compact('buyers', 'sellers'));
    }
}
