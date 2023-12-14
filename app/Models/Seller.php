<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    
    protected $table = 'data_seller';
    protected $fillable = ['nama_toko', 'email', 'alamat_toko', 'password'];
}
