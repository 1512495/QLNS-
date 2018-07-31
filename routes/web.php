<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('trangchu', 'PageController@getIndex');

Route::get('loaisach/{id}', 'PageController@getLoaiSach');

Route::get('chitietsach/{id}', 'PageController@getChiTietSach');

Route::get('dathang', 'PageController@getDatHang');
Route::post('dathang', 'PageController@postDatHang');

Route::get('xoagiohang/{id}', 'PageController@xoaGioHang');


Route::get('dangky', 'PageController@getDangKy');
Route::post('dangky', 'PageController@postDangKy');

Route::get('dangnhap', 'PageController@getDangNhap');
Route::post('dangnhap', 'PageController@postDangNhap');

Route::get('dangxuat', 'PageController@getDangXuat');

Route::get('profile/{id}', 'PageController@profile');

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
 	'uses' =>'PageController@GioiThieu']);

Route::get('lienhe', 'PageController@LienHe');

Route::get('addtocart/{id}','PageController@getAddtocart');

Route::post('timkiem', 'PageController@timkiem');

Route::group(['prefix' => 'admin'], function() {

    Route::group(['prefix' => 'loaisach'], function() {
        Route::get('danhsach', 'LoaiSachController@getDanhSach');

       	Route::get('them', 'LoaiSachController@getThem');
       	Route::post('them', 'LoaiSachController@postThem');

       	Route::get('sua/{id}', 'LoaiSachController@getSua');
       	Route::post('sua/{id}', 'LoaiSachController@postSua');

       	Route::get('xoa/{id}', 'LoaiSachController@getXoa');
    });

    Route::group(['prefix' => 'sach'], function() {
        Route::get('danhsach', 'SachController@getDanhSach');

       	Route::get('them', 'SachController@getThem');
       	Route::post('them', 'SachController@postThem');

       	Route::get('sua/{id}', 'SachController@getSua');
       	Route::post('sua/{id}', 'SachController@postSua');

       	Route::get('xoa/{id}', 'SachController@getXoa');
    });

    Route::group(['prefix' => 'user'], function() {
        Route::get('danhsach', 'UserController@getDanhSach');

       	Route::get('them', 'UserController@getThem');
       	Route::post('them', 'UserController@postThem');

       	Route::get('sua/{id}', 'UserController@getSua');
       	Route::post('sua/{id}', 'UserController@postSua');

       	Route::get('xoa/{id}', 'UserController@getXoa');
    });

    Route::get('dangnhap', 'UserController@getdangnhapAdmin');
    Route::post('dangnhap', 'UserController@postdangnhapAdmin');
});

Route::group(['prefix' => 'ajax'], function() {
      Route::get('dangky/{em}', 'AjaxController@checkDangKy');
  });