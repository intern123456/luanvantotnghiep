<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\TheLoai;
class SanPhamController extends Controller
{
    public function getDanhsach(){
    	$sanpham=SanPham::all();
    	return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }
    public function getThem(){
    	$theloai=TheLoai::all();
    	return view('admin.sanpham.them',['theloai'=>$theloai]);
    }
    public function postThem(){
    	$this->validate($this->request,
    		[
    			'ten'				=>'required',
    			'tomtat'			=>'required',
    			'cauhinh'			=>'required',
    			'gia'				=>'required',
    			'soluong'			=>'required',
    			'hinh'				=>'required',
    			'noidung'			=>'required',
    		]
    		,[
    			'ten.required'		=>'Ban chua nhap ten',
    			'tomtat.required'	=>'Ban chua nhap tom tat',
    			'cauhinh.required'	=>'Ban chua nhap tom tat',
    			'gia.required'		=>'Ban chua nhap gia',
    			'soluong.required'	=>'Ban chua nhap so luong',
    			'hinh.required'		=>'Ban chua nhap hinh',
    			'noidung.required'	=>'Ban chua nhap noi dung',
    		]);
    	$sanpham=new SanPham;
    	$sanpham->Ten 			=$this->request->ten;
    	$sanpham->Ten_KhongDau	=changeTitle($this->request->ten);
    	$sanpham->TomTat 		=$this->request->tomtat;
    	$sanpham->CauHinh 		=$this->request->cauhinh;
    	$sanpham->Gia 			=$this->request->gia;
    	$sanpham->SoLuong 		=$this->request->soluong;
    	$sanpham->NoiDung 		=$this->request->noidung;
    	$sanpham->BanChay 		=$this->request->banchay;
    	$sanpham->TrangThai 	=$this->request->trangthai;
    	$sanpham->idTL 			=$this->request->theloai;
    	if($this->request->hasFile('hinh')){
    		$file=$this->request->file('hinh');
    		$name=$file->getClientOriginalName();
    		$anh=str_random(4)."_".$name;
    		while (file_exists('upload/sanpham/'.$anh)) {
				$anh=str_random(4)."_".$name;
			}
			$file->move('upload/sanpham',$anh);
			$sanpham->Hinh=$anh;
    	}else{
    		$sanpham->Hinh='';
    	}
    	$sanpham->save();
    	return redirect('admin/sanpham/danhsach')->with('ThongBao','Them thanh cong');
    }
    public function getSua($id){
    	$sanpham=SanPham::find($id);
    	$theloai=TheLoai::all();
    	return view('admin.sanpham.sua',['sanpham'=>$sanpham,'theloai'=>$theloai]);
    }
    public function postSua($id){
    	$this->validate($this->request,
    		[
    			'ten'				=>'required',
    			'tomtat'			=>'required',
    			'cauhinh'			=>'required',
    			'gia'				=>'required',
    			'soluong'			=>'required',
    			'hinh'				=>'required',
    			'noidung'			=>'required',
    		]
    		,[
    			'ten.required'		=>'Ban chua nhap ten',
    			'tomtat.required'	=>'Ban chua nhap tom tat',
    			'cauhinh.required'	=>'Ban chua nhap tom tat',
    			'gia.required'		=>'Ban chua nhap gia',
    			'soluong.required'	=>'Ban chua nhap so luong',
    			'hinh.required'		=>'Ban chua nhap hinh',
    			'noidung.required'	=>'Ban chua nhap noi dung',
    		]);
    	$sanpham=SanPham::find($id);
    	$sanpham->Ten 			=$this->request->ten;
    	$sanpham->Ten_KhongDau	=changeTitle($this->request->ten);
    	$sanpham->TomTat 		=$this->request->tomtat;
    	$sanpham->CauHinh 		=$this->request->cauhinh;
    	$sanpham->Gia 			=$this->request->gia;
    	$sanpham->SoLuong 		=$this->request->soluong;
    	$sanpham->NoiDung 		=$this->request->noidung;
    	$sanpham->BanChay 		=$this->request->banchay;
    	$sanpham->TrangThai 	=$this->request->trangthai;
    	$sanpham->idTL 			=$this->request->theloai;
    	if($this->request->hasFile('hinh')){
    		$file=$this->request->file('hinh');
    		$name=$file->getClientOriginalName();
    		$anh=str_random(4)."_".$name;
    		while (file_exists('upload/sanpham/'.$anh)) {
				$anh=str_random(4)."_".$name;
			}
			$file->move('upload/sanpham',$anh);
			unlink('upload/sanpham/'.$sanpham->Hinh);
			$sanpham->Hinh=$anh;
    	}else{
    		$sanpham->Hinh='';
    	}
    	$sanpham->save();
    	return redirect('admin/sanpham/danhsach')->with('ThongBao','Sua thanh cong');
    }
    public function getXoa($id){
        $sanpham=SanPham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('ThongBao','Xoa thanh cong');
    }
}
