<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use App\quantrivien;

class QuanTriVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsQuanTriVien=quantrivien::all();
        return view('quan-tri-vien.danh-sach',compact('dsQuanTriVien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('quan-tri-vien.form'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'ten_dang_nhap'=>'required|unique:quantrivien',
                'mat_khau'=>'required | max:15|min:3',
                'ho_ten'=>'required'],[

                'ten_dang_nhap.required'=>'Tên đăng nhập không được bỏ trống',
                'ten_dang_nhap.unique'=>'Tên đăng nhập đã tồn tại',
                'mat_khau.required'=>'Mật khẩu không được bỏ trống',
                'mat_khau.max'=>'Mật khẩu tối đa là 15 kí tự',
                'mat_khau.min'=>'Mật khẩu tối thiểu là 3 kí tự',
                'ho_ten.required'=>'Họ tên không được bỏ trống',

            ]);
        $quanTriVien = new quantrivien;
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau = Hash::make($request->mat_khau);
        $quanTriVien->ho_ten = $request->ho_ten;
        $quanTriVien->save();

        return redirect()->route('quan-tri-vien.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quanTriVien=quantrivien::find($id);
        return view('quan-tri-vien.form',compact('quanTriVien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $quanTriVien=quantrivien::find($id);
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau = Hash::make($request->mat_khau) ;
        $quanTriVien->ho_ten = $request->ho_ten;
        $quanTriVien->save();

        return redirect()->route('quan-tri-vien.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $quanTriVien=quantrivien::find($id);
         $quanTriVien->delete();
         return redirect()->route('quan-tri-vien.danh-sach');
    }
    public function dangNhap()
    {
        return view('dang-nhap');
    }
    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dang-nhap');
    }
    public function xuLiDangNhap(Request $request)
    {
        $ten_dang_nhap=$request->ten_dang_nhap;
        $mat_khau=$request->mat_khau;
        if(Auth::attempt(['ten_dang_nhap'=>$ten_dang_nhap,'password'=>$mat_khau]))
        {
            return redirect()->route('trang-chu.trangchu-cms');
        }
        else
        {
            return "Đăng nhập thất bại";
        }
    }
   
    public function getLogout()
    {
        Auth::guard('quantrivien')->logout();
        return redirect('/');
    }
}

