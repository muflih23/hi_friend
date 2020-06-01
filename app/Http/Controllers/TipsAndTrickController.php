<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipsAndTrickController extends Controller
{
    public function tntview()
    {
        return view('welcomepage/tnt');
    }

    public function u_tntview()
    {
        return view('homepage/user_tnt');
    }
}
