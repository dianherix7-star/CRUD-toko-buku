<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoBuku extends Model
{
    use HasFactory;

    protected $table = 'toko_buku';

    protected $fillable = [
        'judul_buku',
        'pengarang',
        'penerbit',
        'genre',
        'tahun_terbit',
    ];
}

