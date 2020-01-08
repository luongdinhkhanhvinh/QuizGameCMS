<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LuotChoi;
use App\NguoiChoi;
class LichSuController extends Controller
{
	public function layDanhSach(Request $request)
	{
    	$luotChoi  = LuotChoi::all();
        if ($luotChoi != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách lượt chơi thành công",
                'data'    => $luotChoi,
            ];
            return response()->json($result);
        }
        return response()->json([
            'success'     => false,
            'message'     => "Lấy danh sách lượt chơi thất bại"
        ]);
    }
    //Theo id
     public function layLuotChoi(Request $request, $id)
    {
         $luot_choi=LuotChoi::find($id);
         if($luot_choi==null)
         {
            return response()->json(['success'=>false]);
         }
         $result=[
            'success'=>true,
            'luot_choi'=>$luot_choi
         ];
         return response()->json($result);
    }
}
