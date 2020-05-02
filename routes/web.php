<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomePage@index');

Route::get('/#', 'WelcomePage@login');
Route::post('/login', 'WelcomePage@login')->name('masuk');

Route::get('/register', 'WelcomePage@register');
Route::post('/register', 'WelcomePage@addUser')->name('register');

Route::get('/home','WelcomePage@home')->name('home');

Route::get('/guide','GuideController@guideView');

Route::get('/tipsandtricks', 'TipsAndTrickController@tntview');

Route::get('/mounts', 'MountController@mountview');

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
