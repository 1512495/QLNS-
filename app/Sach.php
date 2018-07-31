<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    protected $table = "sach";

    public function loaisach()
    {
    	return $this->belongsTo('App\LoaiSach','id_loai','id');
    }

    public function chitiethoadon()
    {
    	return $this->hasMany('App\ChiTietHoaDon','id_sach','id');
    }
}
