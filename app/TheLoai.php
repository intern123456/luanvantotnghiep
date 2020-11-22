<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    //
    protected $table='TheLoai';

    protected $fillable = [
        'Ten',
        'Ten_KhongDau',
        'TrangChu',
        'TrangThai',
    ];

    protected $casts = [
        'Ten' => 'string',
        'Ten_KhongDau' => 'string',
        'TrangChu' => 'integer',
        'TrangThai' => 'integer',
    ];

    function sanpham(){
    	return $this->hasMany('App\SanPham','idTL','id');
    }
}
