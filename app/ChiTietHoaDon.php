<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table = "chitiethoadon";

    public function sach()
    {
    	return $this->belongsTo('App\Sach','id_sach','id');
    }

    public function hoadon()
    {
    	return $this->belongsTo('App\HoaDon','id_hoadon','id');
    }

}
