<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThemQuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =[];
        $admin = [
                'ten_dang_nhap' => 'admin',
                'mat_khau' => 'admin'
            ];
            $i = 1;
        // Them vao bang goi_credit
        foreach ($admin as $quan_tri_vien) {
            echo "Them quan tri vien thu " . $i . "\n";
            QuanTriVien::create($quan_tri_vien);
            $i++;
        }
        echo "Done...";
    }
}
