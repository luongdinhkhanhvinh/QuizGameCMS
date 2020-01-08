<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableChiTietLuotChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietLuotChoi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('luot_choi_id');
            $table->integer('cau_hoi_id');
            $table->string('phuong_an');
            $table->integer('diem');
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChiTietLuotChoi');
    }
}
