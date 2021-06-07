<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', 'FrontController@index');
// News裡面功能改為用controller 來寫商業、網頁邏輯
Route::get('/news', 'FrontController@news');

Route::get('/news/{id}', 'FrontController@newsDetail');

Route::get('/product', 'FrontController@product');

Route::get('/products/{id}', 'FrontController@productDetail');


Route::get('/front', 'FrontController@front');



// Route::get('/', function () {
//     $discount = 0.8;
//     $total = 500 * $discount;
//     return view('front.index', ['name' => 'eric', 'price' => $total, 'shipment' => '黑貓']);
// });

// Route::get('/front', function () {
//     return view('layouts.front');
// });


// Route::get('/news', function () {
//     $news = DB::table('news')->get();
//     return view('front.news', compact('news'));
// });

// Route::get('/product', function () {
//     return view('front.product');
// });


