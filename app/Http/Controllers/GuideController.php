<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function guideView()
    {
        return view('welcomepage/guide');
    }
}
