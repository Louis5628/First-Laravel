<?php

namespace App\Http\Controllers;

use App\Contactus;
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
        $discount_price = [];
        foreach ($product as $key => $value) {
            # code...
            array_push($discount_price, round($value->price * $value->discount));
        }
        // dd($discount_price);
        return view('front.product.index', compact('product', 'discount_price'));
    }

    public function productDetail($id){
        // 把從網址列帶進的id抓出來
        // dd($id);
        $record = DB::table('products')->find($id);
        // dd($record);
        return view('front.product.product', compact('record'));
    }


    public function contactus(){
        return view('front.contactus.index');
    }


    public function contactusSend(Request $request) {
        Contactus::create([
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'content' => $request->content,
       ]);

       return redirect('/contactus')->with('message', '成功聯絡我們');

    //    Contactus::insert([
    //         'name' => '123',
    //         'email' => 'abc@123',
    //         'phone' => '1234569',
    //         'content' => 'rdlkhfljrgioejfiejrjragf'
    // ]);

    }


    public function change() {

        // // 法一
        // // 抓到要改的資料
        // $old_record = Contactus::find(1);
        // // 修改資料欄位
        // $old_record->name = 'eric';
        // $old_record->phone = '777888999';
        // // 儲存資料
        // $old_record->save();

        // // 法二
        // // 無法在頁面上印出改完的內容，不推
        // $old_record = Contactus::find(1)->update([
        //    'name' => 'eric'
        // ]);

        // 批次修改資料
        // where('欲搜尋的資料欄位', '條件')，找出的會是陣列
        // 只要第一筆的資料，就用first()，找全部就是get()
        $old_record = Contactus::where('name', 123)->get();

        foreach ($old_record as $key => $value) {
            // 批次修改料
            $value->name = 'eric';
            $value->phone = '444555666';
            $value->save();
        }

        //模糊搜尋: 在where中加入 'like'，'找的字' . '%' . '找的字'
        // ex: $old_record = Contactus::where('name', '黃' . '%' . '成')->get();

    }



    // nav
    public function front() {
        return view('layouts.front');
    }


}
