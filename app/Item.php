<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'kategori', 'nama_barang', 'harga', 'rating_barang'
    ];
}
