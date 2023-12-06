<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        $buyer = Buyer::all(); // Mengambil semua data pembeli dari tabel

        return view('buyerDash', ['buyer' => $buyer, 'title' => "Buyer Dashboard"]);
    }
}
