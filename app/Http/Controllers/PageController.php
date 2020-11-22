<?php

namespace App\Http\Controllers;


use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Banner;
use App\TheLoai;
use App\TinTuc;
use App\SanPham;
use App\KhachHang;
use App\ChiTietThuocTinh;
use App\ThuocTinh;
use Mail;
class PageController extends Controller
{


    function trangchu()
    {
        $sanphams=SanPham::where('TrangThai',1)->orderByRaw('id DESC')->get();
        $tintucs=TinTuc::all();
        $banners=Banner::where('TrangThai',1)->get();
        $iphones=SanPham::where('idTL',1)->get()->random(4);;
        $ipads=SanPham::where('idTL',2)->take(4)->get();
        $macbooks=SanPham::where('idTL',4)->take(4)->get();
        $applewatchs=SanPham::where('idTL',3)->take(4)->get();
        $sanphamhots=SanPham::where('pay','>',0)->orderByRaw('id DESC')->get();
        return view('pages.trangchu',
            compact('banners',
                'tintucs',
                'sanphams',
                'iphones',
                'ipads',
                'macbooks',
                'applewatchs',
                'sanphamhots'));
    }
    function sanpham()
    {
        return view('frontend.subpage.sanpham');
    }
    function giohang()
    {
        return view('frontend.subpage.giohang');
    }
    function chitietsanpham()
    {
        return view('frontend.subpage.chitietsanpham');
    }







    function getDangnhap()
    {
        return view ('frontend.subpage.dangnhap');
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
            return redirect('trangchu')->with(['flag'=>'danger','message'=>'Đăng nhập thành công']);
        }
        else
        {
            return redirect('trangchu')->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }

   function getDangky()
   {
    return view ('frontend.subpage.dangky');
   }

   function postDangky(Request $request)
   {

        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
            'passwordAgain'=>'required|same:password',
        ],
        [
            'name.required'=>'vui lòng nhập tên người dùng',
            'name.min'=>'Tên người dùng ít nhất 3 ký tự',
            'email.required'=>'vui lòng nhập email',
            'email.email'=>'vui lòng nhập đúng dịnh dạng email',
            'email.unique'=>'email đã tồn tại',
            'password.required'=>'vui lòng nhập mật khẩu',
            'password.min'=>'mật khẩu ít nhất 6 ký tự',
            'password.max'=>'mật khẩu tối đa 20 ký tự',
            'passwordAgain.required'=>'vui lòng nhập lại mật khẩu',
            'passwordAgain.same'=>'mật khẩu nhập lại không khớp',

        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email= $request->email;
        $user->password= bcrypt($request->password);


        $user->save();
        return redirect('trangchu')->with('thongbao','thêm thành công');


   }

    public function getLogout(){
        Auth::logout();
        return redirect('trangchu');
    }

}

//backend

