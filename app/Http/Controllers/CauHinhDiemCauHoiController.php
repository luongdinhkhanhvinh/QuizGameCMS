<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cauhinhdiemcauhoi;
class CauHinhDiemCauHoiController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsCauHinhDiem=cauhinhdiemcauhoi::all();
        return view('cau-hinh-diem-cau-hoi.danh-sach',compact('dsCauHinhDiem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('cau-hinh-diem-cau-hoi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauHinhDiem=new cauhinhdiemcauhoi;
        $cauHinhDiem->thu_tu=$request->thu_tu;
        $cauHinhDiem->diem=$request->diem;
        $cauHinhDiem->save();
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
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
        $cauHinhDiem=cauhinhdiemcauhoi::find($id);
        return view('cau-hinh-diem-cau-hoi.form',compact('cauHinhDiem'));
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
        $cauHinhDiem=cauhinhdiemcauhoi::find($id);
        $cauHinhDiem->thu_tu=$request->thu_tu;
        $cauHinhDiem->diem=$request->diem;
        $cauHinhDiem->save();
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cauHinhDiem=cauhinhdiemcauhoi::find($id);
        $cauHinhDiem->delete();
        $cauHinhDiem->redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }
}
