<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\SanPham;
use App\QuanTri;
class BannerController extends Controller
{
    public function getDanhsach(){
    	$banner=Banner::all();
    	return view('admin.banner.danhsach',['banner'=>$banner]);

    }
    public function getThem(){
    	$sanpham=SanPham::all();
    	$quantri=QuanTri::all();
    	return view('admin.banner.them',['sanpham'=>$sanpham,'quantri'=>$quantri]);
    }
    public function postThem(){
    	$this->validate($this->request,
    		[
    			'ten' 				=>'required',
    			'noidung' 			=>'required',
    			'hinh'				=>'required',
    			'sanpham'			=>'required',
    			'quantri'			=>'required',
    			'trangthai'			=>'required',
    		]
    		,[
    			'ten.required'		=>'Ban chua nhap ten banner',
    			'noidung.required'	=>'Ban chua nhap noi dung',
    			'hinh,required'		=>'Ban chua chon hinh',
    			'sanpham.required'	=>'Ban chua chon san pham',
    			'quantri.required'	=>'Ban chua chon quan tri',
    			'trangthai.required'=>'Ban chua check trang thai',
    		]);
    	$banner=new Banner;
    	$banner->Ten 				=$this->request->ten;
    	$banner->NoiDung   			=$this->request->noidung;
    	$banner->idSP 				=$this->request->sanpham;
    	$banner->idQT 				=$this->request->quantri;
    	$banner->TrangThai 			=$this->request->trangthai;

    	if($this->request->hasFile('hinh')){
    		$file=$this->request->file('hinh');
    		$name=$file->getClientOriginalName();
    		$hinh=str_random(4)."_".$name;
    		while (file_exists('upload/banner/'.$hinh)) {
    			$hinh=str_random(4)."_".$name;
    		}
    		$file->move('upload/banner',$hinh);
    		$banner->Hinh=$hinh;
    	}else{
    		$banner->Hinh='';
    	}
    	$banner->save();
    	return redirect('admin/banner/danhsach')->with('ThongBao','Them thanh cong');
    }
    public function getSua($id){
    	$banner=Banner::find($id);
    	$sanpham=SanPham::all();
    	$quantri=QuanTri::all();
    	return view('admin.banner.sua',['banner'=>$banner,'sanpham'=>$sanpham,'quantri'=>$quantri]);
    }
    public function postSua($id){
    		$this->validate($this->request,
    		[
    			'ten' 				=>'required',
    			'noidung' 			=>'required',
    			'hinh'				=>'required',
    			'sanpham'			=>'required',
    			'quantri'			=>'required',
    			'trangthai'			=>'required',
    		]
    		,[
    			'ten.required'		=>'Ban chua nhap ten banner',
    			'noidung.required'	=>'Ban chua nhap noi dung',
    			'hinh,required'		=>'Ban chua chon hinh',
    			'sanpham.required'	=>'Ban chua chon san pham',
    			'quantri.required'	=>'Ban chua chon quan tri',
    			'trangthai.required'=>'Ban chua check trang thai',
    		]);
    	$banner=Banner::find($id);
    	$banner->Ten 				=$this->request->ten;
    	$banner->NoiDung   			=$this->request->noidung;
    	$banner->idSP 				=$this->request->sanpham;
    	$banner->idQT 				=$this->request->quantri;
    	$banner->TrangThai 			=$this->request->trangthai;

    	if($this->request->hasFile('hinh')){
    		$file=$this->request->file('hinh');
    		$name=$file->getClientOriginalName();
    		$hinh=str_random(4)."_".$name;
    		while (file_exists('upload/banner/'.$hinh)) {
    			$hinh=str_random(4)."_".$name;
    		}
    		$file->move('upload/banner',$hinh);
    		unlink('upload/banner/'.$banner->Hinh);
    		$banner->Hinh=$hinh;
    	}else{
    		$banner->Hinh='';
    	}
    	$banner->save();
    	return redirect('admin/banner/danhsach')->with('ThongBao','Sua thanh cong');
    }
    public function getXoa($id){
    	$banner=Banner::find($id);
    	$banner->delete();
    	return redirect('admin/banner/danhsach')->with('ThongBao','Xoa thanh cong');
    }
}
