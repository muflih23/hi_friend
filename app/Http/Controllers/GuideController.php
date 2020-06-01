<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function guideView()
    {
        return view('welcomepage/guide');
    }

    public function u_guideView()
    {
        return view('homepage/user_guide');
    }
}
