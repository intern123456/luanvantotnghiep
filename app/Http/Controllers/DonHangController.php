<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonHang;
use App\ChiTietDonHang;
use App\SanPham;
class DonHangController extends Controller
{
	public function getDanhsach(){
		$donhang=DonHang::all();
		return view('admin.donhang.danhsach',['donhang'=>$donhang]);
	}
	public function getXuly($id){
		$ctdh=ChiTietDonHang::find($id);
		return view('admin.donhang.xuly',['ctdh'=>$ctdh]);
	}
	public function postXuly($id){
		$this->validate($this->request,
			[
				'imei'				=>'required|unique:ChiTietDonHang,IMEI',
			]
			,[
				'imei.required'		=>'Ban chua nhap imei',
				'imei.unique'		=>'Imei da ton tai.',
			]);
		$ctdh=ChiTietDonHang::find($id);

		$ctdh->IMEI=$this->request->imei;
		$ctdh->save();
		return redirect('admin/donhang/danhsach')->with('ThongBao','Them imei thanh cong');

	}
	// public function getXulydonhang1($id){
	// 	$donhang=DonHang::find($id);
	// 	if($donhang->TrangThai==1){
	// 		return redirect('admin/donhang/danhsach')->with('ThongBao','Da xu ly');
	// 	}else{
	// 		$trangthai=1;
	// 	}
	// 	$donhang->TrangThai=$trangthai;
	// 	$donhang->save();
	// 	if($donhang)
	// 	{

	// 		foreach ($donhang->chitietdonhang as $ctdh)
	// 		{
 //    			//so luong trong hoa don
	// 			$soluong=$ctdh->SoLuong;
	// 			$idsp=$ctdh->idSP;


	// 			$sanpham=SanPham::find($idsp);
 //    			//so luong trong san pham
	// 			$slsanpham=$sanpham->SoLuong;
 //    			//so luong san pham con lai
	// 			$slsanphamconlai=$slsanpham-$soluong;

 //    			//update lai so luong san pham

	// 			$sanpham->SoLuong=$slsanphamconlai;
	// 			$sanpham->pay 	 =$sanpham->pay+1;
	// 			$sanpham->save();

	// 		}

	// 	}
	// 	return redirect('admin/donhang/danhsach')->with('ThongBao','update thanh cong');

	// }
	public function getXulydonhang($id){
		$donhang=DonHang::find($id);
		return view('admin.donhang.xulydonhang',['donhang'=>$donhang]);
	}
	public function postXulydonhang($id){
		$donhang=DonHang::find($id);
		if($donhang->TrangThai==4){
			return redirect('admin/donhang/danhsach')->with('ThongBao','Don hang da huy khong the thay doi');
		}elseif($donhang->TrangThai==3){
			return redirect('admin/donhang/danhsach')->with('ThongBao','Don hang da duoc giao');
		}
		else{
			$trangthai=$this->request->trangthai;
		}
		$donhang->TrangThai=$trangthai;
		$donhang->save();
		if($donhang->TrangThai==3)
		{

			foreach ($donhang->chitietdonhang as $ctdh)
			{
    			//so luong trong hoa don
				$soluong=$ctdh->SoLuong;
				$idsp=$ctdh->idSP;


				$sanpham=SanPham::find($idsp);
    			//so luong trong san pham
				$slsanpham=$sanpham->SoLuong;
    			//so luong san pham con lai
				$slsanphamconlai=$slsanpham-$soluong;

    			//update lai so luong san pham

				$sanpham->SoLuong=$slsanphamconlai;
				$sanpham->pay 	 =$sanpham->pay+1;
				$sanpham->save();

			}

		}
		return redirect('admin/donhang/danhsach')->with('ThongBao','Cap nhap trang thai don hang thanh cong');
	}
}
