<?php

use Illuminate\Database\Seeder;
use App\CauHinhApp;
class CauHinhAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cauhinhapp')->insert([
        	['co_hoi_sai'=>'5'],
        	['thoi_gian_tra_loi'=>'30']
        	]);
    }
}
