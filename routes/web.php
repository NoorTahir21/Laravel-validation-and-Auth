<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupcontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::post("users", [signupcontroller::class,'getData']);
Route::view('welcome','users');
Route::post("userlogin",[signupcontroller::class,'login']);
Route::view('user-login','login');