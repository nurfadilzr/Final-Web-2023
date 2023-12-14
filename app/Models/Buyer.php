<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $table = 'data_buyer';
    protected $fillable = ['nama', 'email', 'alamat_pengiriman', 'password'];

}
