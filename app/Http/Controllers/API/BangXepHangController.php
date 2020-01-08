<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NguoiChoi;
class BangXepHangController extends Controller
{
      public function layDanhSach(Request $request)
    {
    	$page = $request->query('page',1);
        $limit=$request->query('limit',15);
        $dsNguoiChoi = NguoiChoi::orderBy('diem_cao_nhat','desc')->skip(($page-1)* $limit)->take($limit)->get();
        return response()->json([
        'total'=>NguoiChoi::count(),
        'data'=>$dsNguoiChoi
        ]);
    }
}
