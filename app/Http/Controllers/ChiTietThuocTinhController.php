<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\ThuocTinh;
use App\ChiTietThuocTinh;
class ChiTietThuocTinhController extends Controller
{
    public function getDanhsach(){
    	$chitiettt=ChiTietThuocTinh::all();
    	return view('admin.chitietthuoctinh.danhsach',['chitiettt'=>$chitiettt]);
    }
    public function getThem(){
    	$sanpham=SanPham::all();
    	$thuoctinh=ThuocTinh::all();
    	return view('admin.chitietthuoctinh.them',['sanpham'=>$sanpham,'thuoctinh'=>$thuoctinh]);
    }
    public function postThem(){
    	$this->validate($this->request,
    		[
    			'chitiet' 				=>'required',
    			'sanpham'				=>'required',
    			'thuoctinh'				=>'required',
    		]
    		,[
    			'chitiet.required'		=>'Ban chua nhap chi tiet',
    			'sanpham.required'		=>'ban chua chon san pham',
    			'thuoctinh.required'	=>'Ban chua chon thuoc tinh',
    		]);
    	$chitiettt=new ChiTietThuocTinh;
    	$chitiettt->ChiTiet 		=$this->request->chitiet;
    	$chitiettt->idSP 			=$this->request->sanpham;
    	$chitiettt->idTT 			=$this->request->thuoctinh;
    	$chitiettt->save();
    	return redirect('admin/chitietthuoctinh/danhsach')->with('ThongBao','Them thanh cong');
    }
    public function getSua($id){
    	$chitiettt=ChiTietThuocTinh::find($id);
    	$sanpham=SanPham::all();
    	$thuoctinh=ThuocTinh::all();
    	return view('admin.chitietthuoctinh.sua',['chitiettt'=>$chitiettt,'sanpham'=>$sanpham,
    		'thuoctinh'=>$thuoctinh]);
    }
    public function postSua($id){
    	$this->validate($this->request,
    		[
    			'chitiet' 				=>'required',
    			'sanpham'				=>'required',
    			'thuoctinh'				=>'required',
    		]
    		,[
    			'chitiet.required'		=>'Ban chua nhap chi tiet',
    			'sanpham.required'		=>'ban chua chon san pham',
    			'thuoctinh.required'	=>'Ban chua chon thuoc tinh',
    		]);
    	$chitiettt=ChiTietThuocTinh::find($id);
    	$chitiettt->ChiTiet 		=$this->request->chitiet;
    	$chitiettt->idSP 			=$this->request->sanpham;
    	$chitiettt->idTT 			=$this->request->thuoctinh;
    	$chitiettt->save();
    	return redirect('admin/chitietthuoctinh/danhsach')->with('ThongBao','Sua thanh cong');
    }
    public function getXoa($id){
    	$chitiettt=ChiTietThuocTinh::find($id);
    	$chitiettt->delete();
    	return redirect('admin/chitietthuoctinh/danhsach')->with('ThongBao','Xoa thanh cong');
    }
}
