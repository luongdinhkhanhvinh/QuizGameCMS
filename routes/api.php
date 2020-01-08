<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('linh-vuc','API\LinhVucController@layDanhSach');
Route::get('cau-hoi','API\CauHoiController@layDanhSach');
Route::get('nguoi-choi','API\NguoiChoiController@layDanhSach');
Route::get('credit','API\CreditController@layDanhSach');
Route::post('dang-nhap', 'API\DangNhapController@dangNhap');
Route::get('lich-su', 'API\LichSuController@layDanhSach');
Route::get('bang-xep-hang', 'API\BangXepHangController@layDanhSach');
Route::post('dang-ki', 'API\NguoiChoiController@dangKi');


