<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
class SendMailController extends Controller
{
    public function send()
    {
    	$objTest=new \stdClass();// Dùng model để truy vấn dữ liệu
    	$objTest->nguoi_nhan ='Mr Thanh';
    	$objTest->noi_sinh='Can Tho';
    	$objTest->nam_sinh='1999';
    	$objTest->nguoi_gui='Mr Secret';

    	Mail::to("dinhthanh011999@gmail.com")->send(new TestEmail($objTest));
    }
}
