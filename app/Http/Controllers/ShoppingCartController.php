<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\TheLoai;
use App\DonHang;
use App\ChitietDonHang;
use Illuminate\Support\Facades\Auth;
class ShoppingCartController extends Controller
{
	public function __construct(){
		$theloai=TheLoai::where('TrangThai',1)->get();
		view()->share('theloai',$theloai);
	}
	public function themgiohang($id){
		$sanpham=SanPham::find($id);
		if($sanpham){
			\Cart::add([
				'id'		=>$sanpham->id,
				'name' 		=>$sanpham->Ten,
				'qty'		=>1,
				'weight'	=>1,
				'price'	 	=>$sanpham->Gia,
				'options' 	=>['hinh' => $sanpham->Hinh],
			]);
		}

		return redirect()->back();
	}
	public function getGiohang(){
		if(\Cart::count()>0)
		{
			$sanpham=\Cart::content();
			return view('frontend.subpage.giohang',['sanpham'=>$sanpham]);
		}
		else
		{
			return redirect('/');
		}
	}
	public function suagiohang($idcart,$soluong,$idsp){
		$idcart=$idcart;
		$soluong=(int)$soluong;
		$idsp=$idsp;
		$sanpham=SanPham::find($idsp);
		$soluongsanpham=$sanpham->SoLuong;
		if($soluong>$soluongsanpham)
		{
			echo"<script> alert('so luong vuot qua so luong con lai');
			location.herf='giohang';
			</script>";
		}
		else{
			\Cart::update($idcart,$soluong);
			echo 1;
		}
	}
	public function xoagiohang($idcart){
		\Cart::remove($idcart);
		return redirect('giohang')->with('ThongBao','Xoa thanh cong');
	}

	public function getDonhang(){
		$sanpham=\Cart::content();
		return view('frontend.subpage.thanhtoan',['sanpham'=>$sanpham]);
	}
	public function postDonhang(Request $request){
		$tongtien=str_replace(',', '', \Cart::subtotal(0,3));
		$iduser=Auth::guard('KhachHang')->user()->id;
		$idqt=2;

		$donhangId=DonHang::insertGetId([
			'TongTien' 			=>$tongtien,
			'GhiChu' 			=>$request->ghichu,
			'idQT'				=>$idqt,
			'idKH'				=>$iduser,
		]);
		if($donhangId){
			$sanpham=\Cart::content();

			foreach($sanpham as $sp){

				ChitietDonHang::insert([
					'SoLuong' 		=>$sp->qty,
					'Gia'			=>$sp->price,
					'idDH'			=>$donhangId,
					'idSP'			=>$sp->id,
				]);
			}
		}
			\Cart::destroy();
    		return redirect('camon');
	}

}
