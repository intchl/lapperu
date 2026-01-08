<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'judul',
        'foto',
        'tanggal',
        'isi',
        'dilihat'
    ];

    protected $casts = [
        'tanggal' => 'date',
        'tanggal_input' => 'datetime',
    ];

}
