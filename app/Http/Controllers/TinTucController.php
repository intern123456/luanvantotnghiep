<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\QuanTri;
class TinTucController extends Controller
{
	public function getDanhsach(){
		$tintuc=TinTuc::all();
		return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);
	}
	public function getThem(){
		$quantri=QuanTri::all();
		return view('admin.tintuc.them',['quantri'=>$quantri]);
	}
	public function postThem(){
		$this->validate($this->request,
			[
				'tieude'			=>'required',
				'noidung'			=>'required',
				'quantri'			=>'required',
			]
			,[
				'tieude.required'	=>'Ban chua nhap tieu de',
				'noidung.required'	=>'Ban chua nhap noi dung',
				'quantri.required'	=>'Ban chua chon quan tri',
			]);
		$tintuc=new TinTuc;
		$tintuc->TieuDe 			=$this->request->tieude;
		$tintuc->TieuDe_KhongDau	=changeTitle($this->request->tieude);
		$tintuc->NoiDung 			=$this->request->noidung;
		$tintuc->idQT 				=$this->request->quantri;
		if($this->request->hasFile('hinh')){
			$file=$this->request->file('hinh');
			$name=$file->getClientOriginalName();
			$anh=str_random(4)."_".$name;
			while (file_exists('upload/tintuc/'.$anh)) {
				$anh=str_random(4)."_".$name;
			}
			$file->move('upload/tintuc',$anh);
			$tintuc->Hinh=$anh;
		}else{
			$tintuc->Hinh='';
		}
		$tintuc->save();

		return redirect('admin/tintuc/danhsach')->with('ThongBao','Them thanh cong');
	}
	public function getSua($id){
		$tintuc=TinTuc::find($id);
		$quantri=QuanTri::all();
		return view('admin.tintuc.sua',['tintuc'=>$tintuc,'quantri'=>$quantri]);
	}
	public function postSua($id){
		$tintuc=TinTuc::find($id);
		$this->validate($this->request,
			[
				'tieude'			=>'required',
				'noidung'			=>'required',
				'quantri'			=>'required',
			]
			,[
				'tieude.required'	=>'Ban chua nhap tieu de',
				'noidung.required'	=>'Ban chua nhap noi dung',
				'quantri.required'	=>'Ban chua chon quan tri',
			]);
		$tintuc->TieuDe 			=$this->request->tieude;
		$tintuc->TieuDe_KhongDau	=changeTitle($this->request->tieude);
		$tintuc->NoiDung 			=$this->request->noidung;
		$tintuc->idQT 				=$this->request->quantri;
		if($this->request->hasFile('hinh')){
			$file=$this->request->file('hinh');
			$name=$file->getClientOriginalName();
			$anh=str_random(4)."_".$name;
			while (file_exists('upload/tintuc/'.$anh)) {
				$anh=str_random(4)."_".$name;
			}
			$file->move('upload/tintuc',$anh);
			unlink('upload/tintuc/'.$tintuc->Hinh);
			$tintuc->Hinh=$anh;
		}else{
			$tintuc->Hinh='';
		}
		$tintuc->save();

		return redirect('admin/tintuc/danhsach')->with('ThongBao','Sua thanh cong');
	}
	public function getXoa($id){
		$tintuc=TinTuc::find($id);
		$tintuc->delete();
		return redirect('admin/tintuc/danhsach')->with('ThongBao','Xoa thanh cong');
	}
}
