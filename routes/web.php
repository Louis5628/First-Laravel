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
//
// News裡面功能改為用controller 來寫商業、網頁邏輯
Route::get('/news', 'FrontController@news');
Route::get('/news/{id}', 'FrontController@newsDetail');
//
Route::get('/product', 'FrontController@product');
Route::get('/products/{id}', 'FrontController@productDetail');
//
Route::post('/contactus/send', ('FrontController@contactusSend'));
//
Route::get('/change', ('FrontController@change'));
//
Route::get('/contactus', ('FrontController@contactus'));
//
Route::get('/front', 'FrontController@front');
//聯絡我們後台
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/contactus', 'ContactusController@index');

Route::get('/admin/contactus/edit/{id}', 'ContactusController@edit');
Route::POST('/admin/contactus/update/{id}', 'ContactusController@update');
Route::delete('/admin/contactus/delete/{id}', 'ContactusController@delete');
//產品後台
Route::get('/admin/product', 'ProductController@index');
Route::get('/admin/product/edit/{id}', 'ProductController@edit');
Route::POST('/admin/product/update/{id}', 'ProductController@update');
Route::delete('/admin/product/delete/{id}', 'ProductController@delete');
Route::GET('/admin/product/add', 'ProductController@add');
Route::POST('/admin/product/productAdd', 'ProductController@productAdd');


// Route::get('/app', function(){
//     return view('layouts.app');
// });


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


