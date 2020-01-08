<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\NguoiChoi;
class NguoiChoiController extends Controller
{

    public function layDanhSach(Request $request)
    {
    	 $page = $request->page;
        $limit = $request->limit;
        $nguoiChoi = NguoiChoi::orderBy('diem_cao_nhat',"DESC")->skip(($page-1)*$limit)->take($limit)->get();
        $result = [
            'success' => true,
            'total' => NguoiChoi::count(),
            'nguoi_choi' => $nguoiChoi
        ];
        return response()->json($result);
    	
    }
    public function dangKi(Request $request)
    {
    $checkUser = NguoiChoi::where('ten_dang_nhap',$request->ten_dang_nhap)->orWhere('email',$request->email)->first();
        if($checkUser != null){
            return response()->json(['success'=>false]);
         }
        $nguoiChoi = new NguoiChoi();
        $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoiChoi->mat_khau =$request->mat_khau ;
        $nguoiChoi->email = $request->email;
        $nguoiChoi->hinh_dai_dien = "";
        $nguoiChoi->diem_cao_nhat = 0;
        $nguoiChoi->credit = 0;
        $nguoiChoi->save();
        return response()->json(['success'=>true]);
    }
}
