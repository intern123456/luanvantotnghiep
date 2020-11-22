<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\AnhSlideSP;
class AnhSlileSanPhamController extends Controller
{
    //
    public function getDanhsach(){
    	$anhslidesp=AnhSlideSP::all();
    	return view('admin.anhslidesanpham.danhsach',['anhslidesp'=>$anhslidesp]);
    }
    public function getThem(){
    	$sanpham=SanPham::all();
    	return view('admin.anhslidesanpham.them',['sanpham'=>$sanpham]);
    }
    public function postThem(){
    	$this->validate($this->request,
    		[
    			'anhtren' 			=>'required',
    			'anhduoi'			=>'required',
    			'sanpham'			=>'required',
    		]
    		,[
    			'anhtren.required'	=>'Ban chua chon hinh tren',
    			'anhduoi.required'	=>'Ban chua chon hinh duoi',
    			'sanpham.required'	=>'Ban chua chon san pham',
    		]);
    	$anhslidesp=new AnhSlideSP;
    	$anhslidesp->idSP=$this->request->sanpham;
    	if($this->request->hasFile('anhtren')){
    		$file=$this->request->file('anhtren');
    		$name=$file->getClientOriginalName();
    		$anhtren=str_random(4)."_".$name;
    		while (file_exists('upload/anhslidesp/'.$anhtren)) {
    			$anhtren=str_random(4)."_".$name;
    		}
    		$file->move('upload/anhslidesp',$anhtren);
    		$anhslidesp->AnhTren=$anhtren;
    	}
    	if($this->request->hasFile('anhduoi')){
    		$file=$this->request->file('anhduoi');
    		$name=$file->getClientOriginalName();
    		$anhduoi=str_random(4)."_".$name;
    		while (file_exists('upload/anhslidesp/'.$anhduoi)) {
    			$anhduoi=str_random(4)."_".$name;
    		}
    		$file->move('upload/anhslidesp',$anhduoi);
    		$anhslidesp->AnhDuoi=$anhduoi;
    	}
    	$anhslidesp->save();
    	return redirect('admin/anhslidesanpham/danhsach')->with('ThongBao','Them thanh cong');
    }
    public function getSua($id){
    	$anhslidesp=AnhSlideSP::find($id);
    	$sanpham=SanPham::all();
    	return view('admin.anhslidesanpham.sua',['anhslidesp'=>$anhslidesp,'sanpham'=>$sanpham]);
    }
    public function postSua($id){
    	$this->validate($this->request,
    		[
    			'anhtren' 			=>'required',
    			'anhduoi'			=>'required',
    			'sanpham'			=>'required',
    		]
    		,[
    			'anhtren.required'	=>'Ban chua chon hinh tren',
    			'anhduoi.required'	=>'Ban chua chon hinh duoi',
    			'sanpham.required'	=>'Ban chua chon san pham',
    		]);
    	$anhslidesp=AnhSlideSP::find($id);
    	$anhslidesp->idSP=$this->request->sanpham;
    	if($this->request->hasFile('anhtren')){
    		$file=$this->request->file('anhtren');
    		$name=$file->getClientOriginalName();
    		$anhtren=str_random(4)."_".$name;
    		while (file_exists('upload/anhslidesp/'.$anhtren)) {
    			$anhtren=str_random(4)."_".$name;
    		}
    		$file->move('upload/anhslidesp',$anhtren);
    		unlink('upload/anhslidesp/'.$anhslidesp->AnhTren);
    		$anhslidesp->AnhTren=$anhtren;
    	}
    	if($this->request->hasFile('anhduoi')){
    		$file=$this->request->file('anhduoi');
    		$name=$file->getClientOriginalName();
    		$anhduoi=str_random(4)."_".$name;
    		while (file_exists('upload/anhslidesp/'.$anhduoi)) {
    			$anhduoi=str_random(4)."_".$name;
    		}
    		$file->move('upload/anhslidesp',$anhduoi);
    		unlink('upload/anhslidesp/'.$anhslidesp->AnhDuoi);
            $anhslidesp->AnhDuoi=$anhduoi;
    	}
    	$anhslidesp->save();
    	return redirect('admin/anhslidesanpham/danhsach')->with('ThongBao','Sua thanh cong');

    }
    public function getXoa($id){
    	$anhslidesp=AnhSlideSP::find($id);
    	$anhslidesp->deleted();
    	return redirect('admin/anhslidesanpham/danhsach')->with('ThongBao','Xoa thanh cong');
    }
}
