<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSach;

class LoaiSachController extends Controller
{
    public function getDanhSach()
    {
    	$loaisach = LoaiSach::all();
    	return view('admin.loaisach.danhsach',['loaisach'=>$loaisach]);
    }

    public function getThem()
    {
    	return view('admin.loaisach.them');
    }

    public function postThem(Request $req)
    {
    	$this->validate($req,
    		[
    			'name'=>'required|unique:LoaiSach,name|min:3'
    		],
    		[
    			'name.required'=>'Tên loại sách không được bỏ trống',
    			'name.unique'=>'Tên này đã tồn tại',
    			'name.min'=>'Tên tối thiểu 3 kí tự'
    		] 
    	);
    	$loaisach = new LoaiSach;
    	$loaisach->name = $req->name;
    	$loaisach->save();
    	return redirect('admin/loaisach/them')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getSua($id)
    {
    	$tensach = LoaiSach::find($id);
    	return view('admin.loaisach.sua',['tensach'=>$tensach]);
    }

    public function postSua(Request $req, $id)
    {
    	$this->validate($req,
    		[
    			'name'=>'required|unique:LoaiSach,name|min:3'
    		],
    		[
    			'name.required'=>'Tên loại sách không được bỏ trống',
    			'name.unique'=>'Tên này đã tồn tại',
    			'name.min'=>'Tên tối thiểu 3 kí tự'
    		] 
    	);
    	$loaisach = LoaiSach::find($id);
    	$loaisach->name = $req->name;
    	$loaisach->save();
    	return redirect('admin/loaisach/sua/'.$id)->with('thongbao','Bạn đã sửa thành công');
    }

    public function getXoa($id)
    {
    	$loaisach = LoaiSach::find($id);
    	$loaisach->delete($id);
    	return redirect('admin/loaisach/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
