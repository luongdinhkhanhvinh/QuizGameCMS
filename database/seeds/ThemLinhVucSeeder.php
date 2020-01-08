<?php

use Illuminate\Database\Seeder;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linhvuc=[];
        $linhvuc[] = [
            'ten_linh_vuc' => 'Khoa Học',
        ];
         $linhvuc[] = [
            'ten_linh_vuc' => 'Địa Lý',
        ];
         $linhvuc[] = [
            'ten_linh_vuc' => 'Văn Học',
        ];
         $linhvuc[] = [
            'ten_linh_vuc' => 'Âm Nhạc',
        ];
         $linhvuc[] = [
            'ten_linh_vuc' => 'Văn hóa-Nghệ thuật',
        ];
         $linhvuc[] = [
            'ten_linh_vuc' => 'Lịch Sử'
        ];

        $i = 1;
    // Them vao bang linh vuc
    foreach ($linhvuc as $lv) {
        echo "Them linh vuc thu " . $i . "\n";
        App\linhVuc::create($lv);
        $i++;
    }
    echo "Done...";
    }
}
