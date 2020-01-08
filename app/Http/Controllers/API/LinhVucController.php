<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LinhVuc;
class LinhVucController extends Controller
{
    public function layDanhSach()
    {
    	$dsLinhVuc = LinhVuc::all()->random(4);
    	$result=[
    		'success' => true,
    		'data' 	  =>$dsLinhVuc
    	];

    	return response()->json($result);
    }
}
