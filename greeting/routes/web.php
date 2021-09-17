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

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome');
    }

    return view('error');
});
Route::get('/product_discount', function () {
    return view('product_discount');
});
Route::post('/product_discount', function (Illuminate\Http\Request $request) {
    $tensanpham = $request['tensanpham'];
    $gia = $request['gia'];
    $tilechietkhau = $request['tilechietkhau'];
    $luongchietkhau = $gia * $tilechietkhau * 0.01;
    $giatien = $gia - $luongchietkhau;
    return view('show_product_discount', compact(['tensanpham','gia', 'giatien', 'luongchietkhau',  'tilechietkhau']));
});
