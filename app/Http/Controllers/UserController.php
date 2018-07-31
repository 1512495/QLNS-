<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDanhSach()
    {
    	$user = User::all();
    	return view('admin.users.danhsach',['user'=>$user]);
    }

    public function getThem()
    {
    	return view('admin.users.them');
    }

    public function postThem(Request $req)
    {
    	$user = new User;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->password = Hash::make($req->password);
    	$user->quyen = $req->quyen;

    	$user->save();
    	return redirect('admin/users/them')->with('thongbao','Bạn đã thêm thành công');
    }


    public function getSua($id)
   	{
      	$user = User::find($id);
      	return view('admin.users.sua',['user'=>$user]);
   	}

   public function postSua(Request $req, $id)
   {
   		$user = User::find($id);

   		$user->name = $req->name;
    	$user->email = $req->email;
    	$user->password = Hash::make($req->password);
    	$user->quyen = $req->quyen;

   		$user->save();

   		return redirect('admin/user/sua/'.$id)->with('thongbao','Bạn đã sửa thành công');
   }

   public function getXoa($id)
   {
      	$user = User::find($id);
      	$user->delete();
      	return redirect('admin/user/danhsach')->with('thongbao','Bạn đã xóa thành công');
   }


   public function getdangnhapAdmin()
   {
   		return view('admin.login');
   }
   public function postdangnhapAdmin(Request $req)
   {
   		$this->validate($req,
   		[
   			'email'=>'required',
   			'password'=>'required|min:3'
   		],
   		[
   			'email.required'=>'Bạn chưa điền email',
   			'password.required'=>'Bạn chưa nhập mật khẩu',
   			'password.min'=>'Mật khẩu ít nhất 6 ký tự'
   		]);

   		if (Auth::attempt(['email' => $req->email, 'password' => $req->password]) && Auth::user()->quyen ==1) {
   			return redirect('admin/loaisach/danhsach');
   		}
   		else
   		{
   			return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
   		}
   }
   public function getLogout()
   {
   		Auth::logout();
   		return redirect('admin/dangnhap');
   }
}
