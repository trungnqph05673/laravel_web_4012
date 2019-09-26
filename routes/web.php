<?php

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

Route::get('/{tenNguoiDung?}', function ($tenNguoiDung = 'gia tri mac dinh') {
	dd($tenNguoiDung);
    return view('welcome');
    // dd("trung");
});
Route::view('duong-dan','welcome');
