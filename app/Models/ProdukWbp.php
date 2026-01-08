<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukWbp extends Model
{
    use HasFactory;
    protected $table = 'produk_wbp';

    protected $fillable = [
        'id',
        'produk',
        'harga',
        'foto',
        'tanggal_input'
    ];

    public $timestamps = false;
}
