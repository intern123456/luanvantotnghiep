<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
class KhachHangController extends Controller
{
	public function getDanhsach(){
		$khachhang=KhachHang::all();
		return view('admin.khachhang.danhsach',['khachhang'=>$khachhang]);
	}
	public function getThem(){
		return view('admin.khachhang.them');
	}
	public function postThem(){
		$this->validate($this->request,
			[
				'email'					=>'required|unique:KhachHang,Email',
				'matkhau'				=>'required',
				'matkhauagain'			=>'required|same:matkhau',
				'ten'					=>'required',
				'sdt'					=>'required',
				'diachi'				=>'required',
			]
			,[
				'email.required'		=>'Email khong duoc bo trong',
				'email.unique'			=>'Email da ton tai',
				'matkhau.required'		=>'Mat khau khong duoc bo trong',
				'matkhauagain.required'	=>'Chua nhap lai mat khau',
				'matkhauagain.same'		=>'Mat khau khong giong nhau',
				'ten.required'			=>'Ban chua nhap ten',
				'sdt.required'			=>'Ban chua nhap so dien thoai',
				'diachi.required'		=>'Ban chua chon dia chi',
			]);
		$khachhang=new KhachHang;
		$khachhang->Email 			=$this->request->email;
		$khachhang->password 		=bcrypt($this->request->matkhau);
		$khachhang->HoTen 			=$this->request->ten;
		$khachhang->SoDienThoai 	=$this->request->sdt;
		$khachhang->DiaChi 			=$this->request->diachi;
		$khachhang->save();
		return redirect('admin/khachhang/danhsach')->with('ThongBao','Them Thanh Cong');
	}
	public function getSua($id){
		$khachhang=KhachHang::find($id);
		return view('admin.khachhang.sua',['khachhang'=>$khachhang]);
	}
	public function postSua($id){
		$this->validate($this->request,
			[
				'matkhau'				=>'required',
				'matkhauagain'			=>'required|same:matkhau',
				'ten'					=>'required',
				'sdt'					=>'required',
				'diachi'				=>'required',
			]
			,[
				'matkhau.required'		=>'Mat khau khong duoc bo trong',
				'matkhauagain.required'	=>'Chua nhap lai mat khau',
				'matkhauagain.same'		=>'Mat khau khong giong nhau',
				'ten.required'			=>'Ban chua nhap ten',
				'sdt.required'			=>'Ban chua nhap so dien thoai',
				'diachi.required'		=>'Ban chua chon dia chi',
			]);
		$khachhang=KhachHang::find($id);
		$khachhang->password 		=bcrypt($this->request->matkhau);
		$khachhang->HoTen 			=$this->request->ten;
		$khachhang->SoDienThoai 	=$this->request->sdt;
		$khachhang->DiaChi 			=$this->request->diachi;
		$khachhang->save();
		return redirect('admin/khachhang/danhsach')->with('ThongBao','Sua Thanh Cong');
	}

}
