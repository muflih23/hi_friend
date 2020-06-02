<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mount extends Model
{
    protected $fillable = [
        'foto_gunung', 'nama_gunung', 'lokasi_gunung', 'rating_gunung'
    ];
}
