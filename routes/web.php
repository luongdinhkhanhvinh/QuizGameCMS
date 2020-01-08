<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
})->name('dashboard');
route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dang-nhap');
route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');
route::post('dang-nhap','QuanTriVienController@xuLiDangNhap')->name('xu-li-dang-nhap');


Route::get('mail/send','SendMailController@send');
Route::middleware('auth')->group(function(){

		Route::prefix('trang-chu')->group(function(){
			Route::name('trang-chu.')->group(function(){
				Route::get('/','TrangChuController@index')->name('trangchu-cms');
				
			});
		});
		Route::prefix('linh-vuc')->group(function(){
			Route::name('linh-vuc.')->group(function(){
				Route::get('/','LinhVucController@index')->name('danh-sach');
				Route::get('/them-moi','LinhVucController@create')->name('them-moi');
				Route::post('/them-moi','LinhVucController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','LinhVucController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','LinhVucController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','LinhVucController@destroy')->name('xoa');
			});
		});

		Route::prefix('cau-hoi')->group(function(){
			Route::name('cau-hoi.')->group(function(){
				Route::get('/','CauHoiController@index')->name('danh-sach');
				Route::get('/them-moi','CauHoiController@create')->name('them-moi');
				Route::post('/them-moi','CauHoiController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','CauHoiController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','CauHoiController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','CauHoiController@destroy')->name('xoa');
			});
		});

		Route::prefix('nguoi-choi')->group(function(){
			Route::name('nguoi-choi.')->group(function(){
				Route::get('/','NguoiChoiController@index')->name('danh-sach');
				
			});
		});

		Route::prefix('quan-tri-vien')->group(function(){
			Route::name('quan-tri-vien.')->group(function(){
				Route::get('/','QuanTriVienController@index')->name('danh-sach');
				Route::get('/them-moi','QuanTriVienController@create')->name('them-moi');
				Route::post('/them-moi','QuanTriVienController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','QuanTriVienController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','QuanTriVienController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','QuanTriVienController@destroy')->name('xoa');
			});
		});

		Route::prefix('goi-credit')->group(function(){
			Route::name('goi-credit.')->group(function(){
				Route::get('/','GoiCreditController@index')->name('danh-sach');
				Route::get('/them-moi','GoiCreditController@create')->name('them-moi');
				Route::post('/them-moi','GoiCreditController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','GoiCreditController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','GoiCreditController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','GoiCreditController@destroy')->name('xoa');
			});
		});

		Route::prefix('cau-hinh-app')->group(function(){
			Route::name('cau-hinh-app.')->group(function(){
				Route::get('/','CauHinhAppController@index')->name('danh-sach');
				Route::get('/them-moi','CauHinhAppController@create')->name('them-moi');
				Route::post('/them-moi','CauHinhAppController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','CauHinhAppController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','CauHinhAppController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','CauHinhAppController@destroy')->name('xoa');
			});
		});

		Route::prefix('cau-hinh-diem-cau-hoi')->group(function(){
			Route::name('cau-hinh-diem-cau-hoi.')->group(function(){
				Route::get('/','CauHinhDiemCauHoiController@index')->name('danh-sach');
				Route::get('/them-moi','CauHinhDiemCauHoiController@create')->name('them-moi');
				Route::post('/them-moi','CauHinhDiemCauHoiController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','CauHinhDiemCauHoiController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','CauHinhDiemCauHoiController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','CauHinhDiemCauHoiController@destroy')->name('xoa');
			});
		});

		Route::prefix('cau-hinh-tro-giup')->group(function(){
			Route::name('cau-hinh-tro-giup.')->group(function(){
				Route::get('/','CauHinhTroGiupController@index')->name('danh-sach');
				Route::get('/them-moi','CauHinhTroGiupController@create')->name('them-moi');
				Route::post('/them-moi','CauHinhTroGiupController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','CauHinhTroGiupController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','CauHinhTroGiupController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','CauHinhTroGiupController@destroy')->name('xoa');
			});
		});

		Route::prefix('luot-choi')->group(function(){
			Route::name('luot-choi.')->group(function(){
				Route::get('/','LuotChoiController@index')->name('danh-sach');
				Route::get('/them-moi','LuotChoiController@create')->name('them-moi');
				Route::post('/them-moi','LuotChoiController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','LuotChoiController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','LuotChoiController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','LuotChoiController@destroy')->name('xoa');
			});
		});

		Route::prefix('lich-su-mua-credit')->group(function(){
			Route::name('lich-su-mua-credit.')->group(function(){
				Route::get('/','LichSuMuaCreditController@index')->name('danh-sach');
				Route::get('/them-moi','LichSuMuaCreditController@create')->name('them-moi');
				Route::post('/them-moi','LichSuMuaCreditController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','LichSuMuaCreditController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','LichSuMuaCreditController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','LichSuMuaCreditController@destroy')->name('xoa');
			});
		});

		Route::prefix('chi-tiet-luot-choi')->group(function(){
			Route::name('chi-tiet-luot-choi.')->group(function(){
				Route::get('/','ChiTietLuotChoiController@index')->name('danh-sach');
				Route::get('/them-moi','ChiTietLuotChoiController@create')->name('them-moi');
				Route::post('/them-moi','ChiTietLuotChoiController@store')->name('xu-li-them-moi');
				Route::get('/cap-nhat/{id}','ChiTietLuotChoiController@edit')->name('cap-nhat');
				Route::post('/cap-nhat/{id}','ChiTietLuotChoiController@update')->name('xu-li-cap-nhat');
				Route::get('/xoa/{id}','ChiTietLuotChoiController@destroy')->name('xoa');
			});
		});

});




