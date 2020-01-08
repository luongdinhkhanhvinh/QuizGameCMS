<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DangKiController extends Controller
{
    $nguoiChoi = NguoiChoi::where('ten_dang_nhap', $request->ten_dang_nhap)->where('mat_khau',$request->mat_khau)->orWhere('email', $request->email)->first();
        $flage = false;
        if ($nguoiChoi == null) {
            $nguoiChoi                = new NguoiChoi();
            $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
            $nguoiChoi->mat_khau      = Hash::make($request->mat_khau);
            $nguoiChoi->email         = $request->email;
            $nguoiChoi->hinh_dai_dien = 'thanh.jpg';
            $nguoiChoi->diem_cao_nhat = 0;
            $nguoiChoi->credit        = 0;
            $nguoiChoi->save();
            $flage = true;
        }
        return response()->json(['success' => $flage]);
}
