<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
 
class WelcomePage extends Controller
{
    public function index()
    {
        return view('welcomepage/welcomepage');
    }

    public function home()
    {
        return view('welcomepage/home');
    }

    public function login(Request $request)
    {
       if (\Auth::attempt(['email' => $request->login_email, 'password' => $request->login_password]))
       {
           return redirect()->route('home');
       }
       else
       {
           return ('login gagal');
       }


       //dump testing
        /*$credentials = [
            'email' => $request->login_email,
            'password' => $request->login_password
        ]; 
        //dd($credentials); */


    }

    public function register()
    {
        return view('welcomepage/register');
    }

    public function addUser(Request $request)
    {
        User::create([
           'name' => ($request->nama_depan . " " . $request->nama_belakang),
           'email' => $request->email_pengguna,
           'password' => bcrypt($request->password_baru)
        ]);

        return redirect('/');
    }
}
