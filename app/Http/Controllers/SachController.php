<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sach;
use App\LoaiSach;

class SachController extends Controller
{
    public function getDanhSach()
    {
    	$sach = Sach::all();
    	return view('admin.sach.danhsach',['sach'=>$sach]);
    }

    public function getThem()
    {
    	$loaisach = LoaiSach::all();
    	return view('admin.sach.them',['loaisach'=>$loaisach]);
    }

    public function postThem(Request $req)
    {
    	$this->validate($req,
    		[
    			'name'=>'required|unique:LoaiSach,name|min:3',
    			'gia'=>'required'
    		],
    		[
    			'name.required'=>'Tên loại sách không được bỏ trống',
    			'name.unique'=>'Tên này đã tồn tại',
    			'name.min'=>'Tên tối thiểu 3 kí tự',
    			'gia.required'=>'Bạn chưa điền giá sách'
    		] 
    	);
    	$sach = new Sach;
    	$sach->name = $req->name;
    	$sach->id_loai = $req->id_loai;
    	$sach->mota = $req->mota;
    	$sach->gia = $req->gia;

    	if ($req->hasFile('hinh')) {
    		$file = $req->file('hinh');
    		$name = $file->getClientOriginalName();
    		$file->move('source/image/sach',$name);
    		$sach->hinh = $name;
    	}
    	else{
    			$sach->hinh="";
    	}

    	$sach->save();
    	return redirect('admin/sach/them')->with('thongbao','Bạn đã thêm thành công');
    }

    public function getSua($id)
    {
    	$loaisach = LoaiSach::all();
    	$ttsach = Sach::find($id);
    	return view('admin.sach.sua',['ttsach'=>$ttsach,'loaisach'=>$loaisach]);
    }

    public function postSua(Request $req, $id)
    {
    	$this->validate($req,
    		[
    			'name'=>'required|unique:LoaiSach,name|min:3',
    			'gia'=>'required'
    		],
    		[
    			'name.required'=>'Tên loại sách không được bỏ trống',
    			'name.unique'=>'Tên này đã tồn tại',
    			'name.min'=>'Tên tối thiểu 3 kí tự',
    			'gia.required'=>'Bạn chưa điền giá sách'
    		] 
    	);
    	$sach = Sach::find($id);
    	$sach->name = $req->name;
    	$sach->id_loai = $req->id_loai;
    	$sach->mota = $req->mota;
    	$sach->gia = $req->gia;

    	if ($req->hasFile('hinh')) {
    		$file = $req->file('hinh');
    		$name = $file->getClientOriginalName();
    		$file->move('source/image/sach',$name);
    		unlink('source/image/sach/'.$sach->hinh);
    		$sach->hinh = $name;
    	}
    	else{
    			$sach->hinh="";
    	}

    	$sach->save();
    	return redirect('admin/sach/sua/'.$id)->with('thongbao','Bạn đã sửa thành công');
    }

    public function getXoa($id)
    {
    	$sach = Sach::find($id);
    	$sach->delete($id);
    	return redirect('admin/sach/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
