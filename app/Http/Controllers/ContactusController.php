<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\identicalTo;

class ContactusController extends Controller
{
    //
    public function index(){
        $list = Contactus::orderby('id', 'asc')->get();
        return view('admin.contactus.index', compact('list'));
    }

    public function edit($id){
        $record = Contactus::find($id);
        return view('admin.contactus.edit', compact('record'));
    }

    public function update(Request $request, $id) {
        $old_record = Contactus::find($id);
        $old_record->name = $request->name;
        $old_record->email = $request->email;
        $old_record->phone = $request->phone;
        $old_record->content = $request->content;
        $old_record->save();

       return redirect('/admin/contactus/')->with('message', '修改聯絡我們成功!');

    }

    public function delete($id){
        $old_record = Contactus::find($id);
        $old_record->delete();

        return redirect('/admin/contactus/')->with('deleteok', '刪除聯絡我們成功!');
    }

}
