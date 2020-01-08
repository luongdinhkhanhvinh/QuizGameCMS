<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GoiCredit;
class CreditController extends Controller
{
     public function layDanhSach()
    {
    	$goiCredit = GoiCredit::all();
        if ($goiCredit != null) {
            $result = [
                'success' => true,
                'message' => "Lấy danh sách credit thành công",
                'data'    => $goiCredit
            ];
            return response()->json($result);
        }
        return response()->json([
            'success' => false,
            'message' => "Lấy danh sách credit thất bại"
        ]);
    }
}
