<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MountController extends Controller
{
    public function mountview()
    {
        return view('welcomepage/mounts');
    }
}
