<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\QuanTri;
class QuanTriController extends Controller
{
    public function getDanhsach(){
    	$quantri=QuanTri::all();
    	return view("admin.quantri.danhsach",['quantri'=>$quantri]);
    }
    public function getThem(){
    	return view('admin.quantri.them');
    }
    public function postThem(){
    	$this->validate($this->request,
    		[
    			'email'					=>'required|unique:QuanTri,Email',
    			'matkhau'				=>'required',
    			'matkhauagain'			=>'required|same:matkhau',
    			'ten'					=>'required',
    			'sdt'					=>'required',
    			'quyen'					=>'required',
    		]
    		,[
    			'email.required'		=>'Email khong duoc bo trong',
    			'email.unique'			=>'Email da ton tai',
    			'matkhau.required'		=>'Mat khau khong duoc bo trong',
    			'matkhauagain.required'	=>'Chua nhap lai mat khau',
    			'matkhauagain.same'		=>'Mat khau khong giong nhau',
    			'ten.required'			=>'Ban chua nhap ten',
    			'sdt.required'			=>'Ban chua nhap so dien thoai',
    			'quyen.required'		=>'Ban chua chon quyen',
    		]);
    	$quantri=new QuanTri;
    	$quantri->Email 		=$this->request->email;
    	$quantri->password 		=bcrypt($this->request->matkhau);
    	$quantri->HoTen 		=$this->request->ten;
    	$quantri->SoDienThoai 	=$this->request->sdt;
    	$quantri->Quyen 		=$this->request->quyen;
    	$quantri->save();
    	return redirect('admin/quantri/danhsach')->with('ThongBao','Them Thanh Cong');

    }
    public function getSua($id){
    	$quantri=QuanTri::find($id);
    	return view('admin.quantri.sua',['quantri'=>$quantri]);
    }
    public function postSua($id){
    	$this->validate($this->request,
    		[
    			'matkhau'				=>'required',
    			'matkhauagain'			=>'required|same:matkhau',
    			'ten'					=>'required',
    			'sdt'					=>'required',
    			'quyen'					=>'required',
    		]
    		,[
    			'matkhau.required'		=>'Mat khau khong duoc bo trong',
    			'matkhauagain.required'	=>'Chua nhap lai mat khau',
    			'matkhauagain.same'		=>'Mat khau khong giong nhau',
    			'ten.required'			=>'Ban chua nhap ten',
    			'sdt.required'			=>'Ban chua nhap so dien thoai',
    			'quyen.required'		=>'Ban chua chon quyen',
    		]);
    	$quantri=QuanTri::find($id);
    	$quantri->password 		=bcrypt($this->request->matkhau);
    	$quantri->HoTen 		=$this->request->ten;
    	$quantri->SoDienThoai 	=$this->request->sdt;
    	$quantri->Quyen 		=$this->request->quyen;
    	$quantri->save();
    	return redirect('admin/quantri/danhsach')->with('ThongBao','Sua Thanh Cong');
	    }
    public function getDangnhap(){
        return view('admin.login');
    }
    public function postDangnhap(){
        $this->validate($this->request,
            [
                'email'             =>'required',
                'password'          =>'required',
            ]
            ,[
                'email.required'    =>'Ban chua nhap email',
                'password.required' =>'Ban chua nhap password',
            ]);
       
        if(Auth::guard('QuanTri')->attempt(['Email'=>$this->request->email,'password'=>$this->request->password])){
            return redirect('admin/trangchu');
        }else{
            return redirect()->back();
        }

    }
    public function getDangxuat(){
        Auth::guard('QuanTri')->logout();
        return redirect('admin/dangnhap');
    }
}
