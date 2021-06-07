<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{

    // 首頁
    public function index(){
    $discount = 0.8;
    $total = 500 * $discount;
    return view('front.index', ['name' => 'eric', 'price' => $total, 'shipment' => '黑貓']);
    }

    //最新消息
    public function news() {
        $news = DB::table('news')->get();
        return view('front.news.index', compact('news'));
    }

    public function newsDetail($id){
        // 把從網址列帶進的id抓出來
        // dd($id);
        $record = DB::table('news')->find($id);
        // dd($record);
        return view('front.news.detail', compact('record'));
    }

    // 產品
    public function product() {
        $product = DB::table('products')->get();
        return view('front.product.index', compact('product'));
    }

    public function productDetail($id){
        // 把從網址列帶進的id抓出來
        // dd($id);
        $record = DB::table('products')->find($id);
        // dd($record);
        
        return view('front.product.product', compact('record'));
    }

    // nav
    public function front() {
        return view('front.front');
    }


}
