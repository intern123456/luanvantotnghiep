<?php

namespace App\Http\Controllers;


use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class adminController extends Controller
{

  
    function trangchu()
    {
        return view('pages.trangchu');
    }
   
    //backend
    function login()
    {   
        return view('admin.login');
    }
    function index()
    {   
        return view('admin.index');
    }



    function getDangnhap()
    {
        return view ('admin.login');
    }
    function postDangnhap(Request $request)
    {
        $this->validate($request,
        [
            'email'=>'required',
            'password'=>'required|min:6|max:20',

        ],[
            'email.required'=>'vui lòng nhập email',
            'password.required'=>'vui lòng nhập mật khẩu',
            'password.min'=>'mật khẩu ít nhất 6 ký tự',
            'password.max'=>'mật khẩu tối đa 20 ký tự',
        ]);
        $credentials= array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($credentials))
        {
            return redirect('index')->with(['flag'=>'danger','message'=>'Đăng nhập thành công']);
        }
        else
        {
            return redirect('login')->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }

   public function getLogout(){
        Auth::logout();
        return redirect('trangchu');
    }
    
}

//backend
       
