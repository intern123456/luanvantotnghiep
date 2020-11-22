<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTri;
use App\KhuyenMai;
class KhuyenMaiController extends Controller
{
	public function getDanhsach(){
		$khuyenmai=KhuyenMai::all();
		return view('admin.khuyenmai.danhsach',['khuyenmai'=>$khuyenmai]);
	}
	public function getThem(){
		$quantri=QuanTri::all();
		return view('admin.khuyenmai.them',['quantri'=>$quantri]);
	}
	public function postThem(){
		$this->validate($this->request,
			[		
				'ten'					=>'required',
				'noidung'				=>'required',
			]
			,[
				'ten.required'			=>'Ban chua nhap ten',
				'noidung.required'		=>'Ban chua nhap noi dung',
			]);
		$khuyenmai=new KhuyenMai;
		$khuyenmai->Ten 		=$this->request->ten;
		$khuyenmai->Ten_KhongDau=changeTitle($this->request->ten);
		$arr = explode ("/", $this->request->ngayketthuc);
		if (count($arr)==3) $this->request->ngayketthuc = $arr[2]."-".$arr[1]."-".$arr[0];
		else $this->request->ngayketthuc = date("Y-m-d");
		$khuyenmai->NgayKetThuc	=$this->request->ngayketthuc;
		$khuyenmai->NoiDung 	=$this->request->noidung;
		$khuyenmai->TrangThai 	=$this->request->trangthai;
		$khuyenmai->idQT 		=$this->request->quantri;
		$khuyenmai->save();
		return redirect('admin/khuyenmai/danhsach')->with('ThongBao','Them thanh cong');
	}
	public function getSua($id){
		$khuyenmai=KhuyenMai::find($id);
		$quantri=QuanTri::all();
		return view('admin.khuyenmai.sua',['quantri'=>$quantri,'khuyenmai'=>$khuyenmai]);
	}
	public function postSua($id){
		$this->validate($this->request,
			[		
				'ten'					=>'required',
				'noidung'				=>'required',
			]
			,[
				'ten.required'			=>'Ban chua nhap ten',
				'noidung.required'		=>'Ban chua nhap noi dung',
			]);
		$khuyenmai=KhuyenMai::find($id);
		$khuyenmai->Ten 		=$this->request->ten;
		$khuyenmai->Ten_KhongDau=changeTitle($this->request->ten);
		$arr = explode ("/", $this->request->ngayketthuc);
		if (count($arr)==3) $this->request->ngayketthuc = $arr[2]."-".$arr[1]."-".$arr[0];
		else $this->request->ngayketthuc = date("Y-m-d");
		$khuyenmai->NgayKetThuc	=$this->request->ngayketthuc;
		$khuyenmai->NoiDung 	=$this->request->noidung;
		$khuyenmai->TrangThai 	=$this->request->trangthai;
		$khuyenmai->idQT 		=$this->request->quantri;
		$khuyenmai->save();
		return redirect('admin/khuyenmai/danhsach')->with('ThongBao','Sua thanh cong');
	}
	public function getXoa($id){
		$khuyenmai=KhuyenMai::find($id);
		$khuyenmai->delete();
		return redirect('admin/khuyenmai/danhsach')->with('ThongBao','Xoa thanh cong');
	}
}
