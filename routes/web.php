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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'landingpage')->name('landingpage');
Route::view('/perusahaan', 'perusahaan')->name('perusahaan');
Route::view('/produk', 'produk')->name('produk');
Route::view('/investor', 'investor')->name('investor');
Route::view('/berita', 'berita')->name('berita');
Route::view('/hubungikami', 'hubungikami')->name('hubungikami');
