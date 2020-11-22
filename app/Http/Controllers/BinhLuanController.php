<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\KhachHang;
use App\QuanTri;
use App\BinhLuan;
use Illuminate\Support\Facades\Auth;
class BinhLuanController extends Controller
{
	public function getDanhsach(){
		$binhluan=BinhLuan::all();
		return view('admin.binhluan.danhsach',['binhluan'=>$binhluan]);
	}

	public function postBinhluan($idsp,$noidung){
		$iduser=Auth::guard('KhachHang')->user()->id;
		$idqt=2;
		$idsp=$idsp;
		$noidung=$noidung;

		$binhluan=new BinhLuan;

		$binhluan->NoiDung 	=$noidung;
		$binhluan->idSP 	=$idsp;
		$binhluan->idKH 	=$iduser;
		$binhluan->idQT 	=$idqt;

		$binhluan->save();

		$binhluan1=BinhLuan::where('idSP',$idsp)->get();
		foreach ($binhluan1 as $bl) {
			$hoten=$bl->khachhang->HoTen;
			$noidung=$bl->NoiDung;
			$thoigian=$bl->created_at;
		}


		echo "<li class'review'>
		<div class='thumb'>
		<img src='images/images.png' alt='Image'>
		</div>
		<div class='text-wrap'>
		<div class='review-text'>
		<h2>".$hoten."</h2>
		<p>".$noidung."</p>
		<p>Thời gian: ".$thoigian."</p>
		</div>
		</div>
		</li>";
	}
}
