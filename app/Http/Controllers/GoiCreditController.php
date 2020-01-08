<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\goicredit;
class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsGoiCredit=goicredit::all();
        return view('goi-credit.danh-sach',compact('dsGoiCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goi-credit.form'); 
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
                'ten_goi'=>'required',
                'credit'=>'required',
                'so_tien'=>'required',
                ],[
                'ten_goi.required'=>'Tên gói credit không được bỏ trống',
                'credit.required'=>'Credit không được bỏ trống',
                'so_tien.required'=>'Số tiền không được bỏ trống'
            ]);
        $goiCredit = new goicredit;
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();

        return redirect()->route('goi-credit.danh-sach')->with(['flash_message'=>'Thêm gói Credit thành công']);
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
        $goiCredit=goicredit::find($id);
        return view('goi-credit.form',compact('goiCredit'));
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
        $goiCredit=goicredit::find($id);
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();

        return redirect()->route('goi-credit.danh-sach')->with(['flash_message'=>'cập nhật gói Credit thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goiCredit=goicredit::find($id);
        $goiCredit->delete();
        return redirect()->route('goi-credit.danh-sach');
    }
}
