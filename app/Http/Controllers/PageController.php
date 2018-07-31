<?php

namespace App\Http\Controllers;

use App\Slide;
use App\LoaiSach;
use App\Sach;
use App\Cart;
use Session;
use Hash;
use App\KhachHang;
use App\HoaDon;
use App\ChiTietHoaDon;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function getIndex()
    {
    	$slide = Slide::all();
    	$loaisach = LoaiSach::all();
    	
    	return view('pages.trangchu',['slide'=>$slide,'loaisach'=>$loaisach]);
    }

    public function getLoaiSach($id)
    {
        $sach_theoloai = Sach::where('id_loai',$id)->get();
        $sach_khac = Sach::where('id_loai','<>',$id)->paginate(3);
        $loaisach = LoaiSach::all();
        $ten_loai = LoaiSach::find($id);
    	return view('pages.loaisach',['sach_theoloai'=>$sach_theoloai,'sach_khac'=>$sach_khac,'loaisach'=>$loaisach,'ten_loai'=>$ten_loai]);
    }

    public function getChiTietSach($id)
    {
        $sach = Sach::find($id);
        $sachcungloai = Sach::where('id_loai',$sach->id_loai)->where('id','<>',$sach->id)->take(6)->get();
    	return view('pages.chitietsach',['sach'=>$sach,'sachcungloai'=>$sachcungloai]);
    }

    public function getDatHang()
    {
        if (Session('cart'))
        {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return view('pages.dathang',['cart'=>Session::get('cart'),'products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        }
    	// return view('pages.dathang');
    }

    public function postDatHang(Request $req)
    {
        $cart = Session::get('cart');

        $khachhang = new KhachHang;
        $khachhang->ten = $req->ten;
        $khachhang->gioitinh = $req->gioitinh;
        $khachhang->email = $req->email;
        $khachhang->diachi = $req->diachi;
        $khachhang->sdt = $req->sdt;
        $khachhang->ghichu = $req->ghichu;
        $khachhang->save();

        $hoadon = new HoaDon;
        $hoadon->id_khachhang = $khachhang->id;
        $hoadon->ngaydat = date('Y-m-d');
        $hoadon->tongtien = $cart->totalPrice;
        $hoadon->thanhtoan = $req->phuongthuc_thanhtoan;
        $hoadon->save();

        foreach ($cart->items as $key => $value)
        {
            $chitiethoadon = new ChiTietHoaDon;
            $chitiethoadon->id_hoadon = $hoadon->id;
            $chitiethoadon->id_sach = $key;
            $chitiethoadon->soluong = $value['qty'];
            $chitiethoadon->gia = $value['price']/$value['qty'];
            $chitiethoadon->save();
        }
        Session::forget('cart');

        return redirect('trangchu')->with('thongbao',"Bạn đã đặt hàng thành công");

    }

    public function xoaGioHang($id)
    {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items)>0)
        {
            Session::put('cart',$cart);
            return redirect()->back();
        }
        else
        {
            Session::forget('cart');
            return redirect('trangchu');
        }
        
       
    }


    public function getDangKy()
    {
    	return view('pages.dangky');
    }

    public function postDangKy(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->quyen = $req->quyen;
        $user->save();

        return redirect("dangnhap");
    }

    public function getDangNhap()
    {
    	return view('pages.dangnhap');
    }

    public function postDangNhap(Request $req)
    {
        $temp = array('email' => $req->email, 'password' => $req->password);
        if (Auth::attempt($temp)) 
        {
            return redirect('trangchu');
        }
        else
        {
            return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
        }
    }

    public function getDangXuat()
    {
        Auth::logout();
        return redirect('dangnhap');
    }

    public function GioiThieu()
    {
    	return view('pages.gioithieu');
    }

    public function LienHe()
    {
    	return view('pages.lienhe');
    }

    public function getAddtocart(Request $req, $id)
    {
        $product = Sach::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);

        return redirect()->back();
    }

    public function timkiem(Request $req)
    {
        $tukhoa = $req->tukhoa;
        $timduoc = Sach::where('name','like',"%$tukhoa%")->orWhere('mota','like',"%$tukhoa%")->take(30)->paginate(8);
        return view('pages.timkiem',['timduoc'=>$timduoc,'tukhoa'=>$tukhoa]);
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('pages.profile',['user'=>$user]);
    }

}

