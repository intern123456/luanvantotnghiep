<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class QuanTri extends Authenticatable
{

    
    protected $table='QuanTri';

    function donhang(){
        return $this->haMany('App\DonHang','idQT','id');
    }
    function tintuc(){
        return $this->haMany('App\TinTuc','idQT','id');
    }
    function binhluan(){
        return $this->haMany('App\BinhLuan','idQT','id');
    }
    function khuyenmai(){
        return $this->haMany('App\KhuyenMai','idQT','id');
    }

}
