<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nguoichoi;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsNguoiChoi=nguoichoi::all();
        return view('nguoi-choi.danh-sach',compact('dsNguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        //$nguoiChoi=nguoichoi::find($id);
        //return view('nguoi-choi.form',compact('nguoiChoi'));
         
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
        //$nguoiChoi=nguoichoi::find($id);
        //$nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        //$nguoiChoi->mat_khau = $request->mat_khau ;
       // $nguoiChoi->email = $request->email ;
       // $nguoiChoi->hinh_dai_dien = $request->hinh_dai_dien;
       // $nguoiChoi->diem_cao_nhat = $request->diem_cao_nhat;
       // $nguoiChoi->credit = $request->credit;
       // $nguoiChoi->save();
       // return redirect()->route('nguoi-choi.danh-sach');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $nguoiChoi=nguoichoi::find($id);
        // $nguoiChoi->delete();
       //  return redirect()->route('nguoi-choi.danh-sach');
    }
}
