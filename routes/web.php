<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//font end
Route::get('/','PageController@trangchu');

Route::get('sanpham','PageController@sanpham');

Route::get('chitietsanpham','PageController@chitietsanpham');



Route::get('dangnhap','PageController@getDangnhap');
Route::post('dangnhap','PageController@postDangnhap');
Route::get('dangky','PageController@getDangky');
Route::post('dangky','PageController@postDangky');
Route::get('logout','PageController@getLogout');

//backend
Route::get('login','adminController@login');
Route::get('index','adminController@index');
Route::get('dangnhap','adminController@getDangnhap');
Route::post('dangnhap','adminController@postDangnhap');
Route::get('dangky','adminController@getDangky');
Route::post('dangky','adminController@postDangky');
Route::get('logout','adminController@getLogout');



Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'theloai'],function(){
        //admin/theloai/them
        Route::get('danhsach','TheLoaiController@getDanhSach');

        Route::get('sua/{id}','TheLoaiController@getSua');
        Route::post('sua/{id}','TheLoaiController@postSua');

        Route::get('them','TheLoaiController@getThem');
        Route::post('them','TheLoaiController@postThem');

        Route::get('xoa/{id}','TheLoaiController@getXoa');
    });
    Route::group(['prefix'=>'thuoctinh'],function(){
        Route::get('danhsach','ThuocTinhController@getDanhsach');
        Route::get('them','ThuocTinhController@getThem');
        Route::post('them','ThuocTinhController@postThem');
        Route::get('sua/{id}','ThuocTinhController@getSua');
        Route::post('sua/{id}','ThuocTinhController@postSua');
        Route::get('xoa/{id}','ThuocTinhController@getXoa');
    });
    Route::group(['prefix'=>'sanpham'],function(){
        Route::get('danhsach','SanPhamController@getDanhsach');
        Route::get('them','SanPhamController@getThem');
        Route::post('them','SanPhamController@postThem');
        Route::get('sua/{id}','SanPhamController@getSua');
        Route::post('sua/{id}','SanPhamController@postSua');
        Route::get('xoa/{id}','SanPhamController@getXoa');
    });
    Route::group(['prefix'=>'chitietthuoctinh'],function(){
        Route::get('danhsach','ChiTietThuocTinhController@getDanhsach');
        Route::get('them','ChiTietThuocTinhController@getThem');
        Route::post('them','ChiTietThuocTinhController@postThem');
        Route::get('sua/{id}','ChiTietThuocTinhController@getSua');
        Route::post('sua/{id}','ChiTietThuocTinhController@postSua');
        Route::get('xoa/{id}','ChiTietThuocTinhController@getXoa');
    });
    Route::group(['prefix'=>'anhslidesanpham'],function(){
        Route::get('danhsach','AnhSlileSanPhamController@getDanhsach');
        Route::get('them','AnhSlileSanPhamController@getThem');
        Route::post('them','AnhSlileSanPhamController@postThem');
        Route::get('sua/{id}','AnhSlileSanPhamController@getSua');
        Route::post('sua/{id}','AnhSlileSanPhamController@postSua');
        Route::get('xoa/{id}','AnhSlileSanPhamController@getXoa');
    });
    Route::group(['prefix'=>'banner'],function(){
        Route::get('danhsach','BannerController@getDanhsach');
        Route::get('them','BannerController@getThem');
        Route::post('them','BannerController@postThem');
        Route::get('sua/{id}','BannerController@getSua');
        Route::post('sua/{id}','BannerController@postSua');
        Route::get('xoa/{id}','BannerController@getXoa');
    });
    Route::group(['prefix'=>'khuyenmai'],function(){
        Route::get('danhsach','KhuyenMaiController@getDanhsach');
        Route::get('them','KhuyenMaiController@getThem');
        Route::post('them','KhuyenMaiController@postThem');
        Route::get('sua/{id}','KhuyenMaiController@getSua');
        Route::post('sua/{id}','KhuyenMaiController@postSua');
        Route::get('xoa/{id}','KhuyenMaiController@getXoa');
    });
    Route::group(['prefix'=>'donhang'],function(){
        Route::get('danhsach','DonHangController@getDanhsach');
        //them imei cho chitiet san pham
        Route::get('xuly/{id}','DonHangController@getXuly');
        Route::post('xuly/{id}','DonHangController@postXuly');
        //xu ly don hang
        Route::get('xulydonhang/{id}','DonHangController@getXulydonhang');
        Route::post('xulydonhang/{id}','DonHangController@postXulydonhang');
    });
    Route::group(['prefix'=>'binhluan'],function(){
            Route::get('danhsach','BinhLuanController@getDanhsach');
        });
    Route::group(['prefix'=>'khachhang'],function(){
        Route::get('danhsach','KhachHangController@getDanhsach');
        Route::get('them','KhachHangController@getThem');
        Route::post('them','KhachHangController@postThem');
        Route::get('sua/{id}','KhachHangController@getSua');
        Route::post('sua/{id}','KhachHangController@postSua');
        Route::get('xoa/{id}','KhachHangController@getXoa');


    });
    Route::group(['prefix'=>'quantri'],function(){
        Route::get('danhsach','QuanTriController@getDanhsach');
        Route::get('them','QuanTriController@getThem');
        Route::post('them','QuanTriController@postThem');
        Route::get('sua/{id}','QuanTriController@getSua');
        Route::post('sua/{id}','QuanTriController@postSua');
        Route::get('xoa/{id}','QuanTriController@getXoa');
    });
    Route::group(['prefix'=>'tintuc'],function(){
        Route::get('danhsach','TinTucController@getDanhsach');
        Route::get('them','TinTucController@getThem');
        Route::post('them','TinTucController@postThem');
        Route::get('sua/{id}','TinTucController@getSua');
        Route::post('sua/{id}','TinTucController@postSua');
        Route::get('xoa/{id}','TinTucController@getXoa');
    });


});




//gio hang
//gio hang
Route::get('themgiohang/{id}','ShoppingCartController@themgiohang');
Route::get('giohang','ShoppingCartController@getGiohang');
Route::get('suagiohang/{idcart}/{soluong}/{idsp}','ShoppingCartController@suagiohang');
Route::get('xoagiohang/{idcart}','ShoppingCartController@xoagiohang');


