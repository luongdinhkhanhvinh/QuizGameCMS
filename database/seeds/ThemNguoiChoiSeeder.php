<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $count = 1;
        // while($count < 201) {
		// 	echo "Them nguoi choi thu " . $count . "\n";
        // 	$tenDangNhap = Str::random(8);
        // 	App\NguoiChoi::create([
        // 		'ten_dang_nhap' => $tenDangNhap,
        // 		'mat_khau'		=> Hash::make(Str::random(6)),
        // 		'email'			=> $tenDangNhap . '@gmail.com',
        // 		'hinh_dai_dien'	=> $tenDangNhap . '.jpg',
        // 		'diem_cao_nhat'	=> rand(1000, 5000),
        // 		'credit'		=> rand(10, 500)
        // 	]);
        // 	$count++;
        
        App\NguoiChoi::create([
            'ten_dang_nhap' => 'a',
            'mat_khau'		=> Hash::make('123'),
            'email'			=> 'q@gmail.com',
            'hinh_dai_dien'	=>'a.jpg',
            'diem_cao_nhat'	=> '1111',
            'credit'		=>'11'
        ]);
        App\NguoiChoi::create([
            'ten_dang_nhap' => 'b',
            'mat_khau'      => Hash::make('1234'),
            'email'         => 'q@gmail.com',
            'hinh_dai_dien' =>'a.jpg',
            'diem_cao_nhat' => '1111',
            'credit'        =>'11'
        ]);
        }
    }
