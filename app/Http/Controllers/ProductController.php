<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){

        $list = Product::orderby('id', 'asc')->get();
        $discount_price = [];
        foreach ($list as $key => $value) {
            array_push($discount_price, round($value->price * $value->discount));
        }
        return view('admin.product.index', compact('list', 'discount_price'));
    }

    public function edit($id){
        $record = Product::find($id);
        return view('admin.product.edit', compact('record'));
    }

    public function update(Request $request, $id) {
        $old_record = Product::find($id);
        $old_record->name = $request->name;
        $old_record->price = $request->price;
        $old_record->discount = $request->discount;
        $old_record->discript = $request->discript;
        $old_record->img = $request->img;
        $old_record->save();

       return redirect('/admin/product/')->with('message', '修改產品成功!');
    }

    public function delete($id){
        $old_record = Product::find($id);
        $old_record->delete();

        return redirect('/admin/product/')->with('deleteok', '刪除產品成功!');
    }

    public function add(){
        return view('admin.product.add');
    }

    public function productAdd(Request $request){
        Product::create([
            'img' => $request->img,
            'name' => $request->name,
            'discript' => $request->discript,
            'price' => $request->price,
            'discount' => $request->discount,
        ]);
        return redirect('/admin/product')->with('addok', '新增產品成功!');
    }


}
