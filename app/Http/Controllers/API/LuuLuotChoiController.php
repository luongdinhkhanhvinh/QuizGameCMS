<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LuotChoi;
use NguoiChoi;
class LuuLuotChoiController extends Controller
{
    	$luotChoi = new LuotChoi();
        $luotChoi->nguoi_choi_id = $request->nguoi_choi_id;
        $luotChoi->so_cau = $request->so_cau;
        $luotChoi->diem = $request->diem;
        $luotChoi->ngay_gio = $request->ngay_gio;
        $luotChoi->save();
        return response()->json(['success'=>true]);
}
