<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsCauHoi=cauhoi::all();
        return view('cau-hoi.danh-sach',compact('dsCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $dsLinhVuc=linhvuc::all();
        return view('cau-hoi.form',compact('dsLinhVuc')); 
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
                'noi_dung'=>'required',
                //'linh_vuc_id'=>'required',
                'phuong_an_a'=>'required',
                'phuong_an_b'=>'required',
                'phuong_an_c'=>'required',
                'phuong_an_d'=>'required',
                'dap_an'=>'required',

                ],[
                'noi_dung.required'=>'Nội dung không được bỏ trống',             
                //'linh_vuc_id.required'=>'Bạn chưa chọn lĩnh vực.Vui lòng chọn lĩnh vực',
                'phuong_an_a.required'=>'Phương án A không được bỏ trống. Vui lòng xem lại',
                'phuong_an_b.required'=>'Phương án B không được bỏ trống. Vui lòng xem lại',
                'phuong_an_c.required'=>'Phương án C không được bỏ trống. Vui lòng xem lại',
                'phuong_an_d.required'=>'Phương án D không được bỏ trống. Vui lòng xem lại',
                'dap_an.required'=>'Đáp án không được bỏ trống. Vui lòng xem lại'
            ]);
   


        $cauHoi = new cauhoi;
        $cauHoi->noi_dung= $request->noi_dung;
        $cauHoi->linh_vuc_id= $request->linh_vuc;
        $cauHoi->phuong_an_a= $request->phuong_an_a;
        $cauHoi->phuong_an_b= $request->phuong_an_b;
        $cauHoi->phuong_an_c= $request->phuong_an_c;
        $cauHoi->phuong_an_d= $request->phuong_an_d;
        $cauHoi->dap_an= $request->dap_an;
        $cauHoi->save();
        return redirect()->route('cau-hoi.danh-sach')->with(['flash_message'=>'Thêm câu hỏi thành công']);
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
         $cauHoi= cauhoi::find($id);
        $dsLinhVuc= linhvuc::all();
        return view('cau-hoi.form',compact('cauHoi','dsLinhVuc'));
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
        $cauHoi=cauhoi::find($id);
        $cauHoi->noi_dung= $request->noi_dung;
        $cauHoi->linh_vuc_id= $request->linh_vuc;
        $cauHoi->phuong_an_a= $request->phuong_an_a;
        $cauHoi->phuong_an_b= $request->phuong_an_b;
        $cauHoi->phuong_an_c= $request->phuong_an_c;
        $cauHoi->phuong_an_d= $request->phuong_an_d;
        $cauHoi->dap_an= $request->dap_an;
        $cauHoi->save();

        return redirect()->route('cau-hoi.danh-sach')->with(['flash_message'=>'cập nhật câu hỏi thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $cauHoi=cauhoi::find($id);
        $cauHoi->delete();
        return redirect()->route('cau-hoi.danh-sach');
    }
}
