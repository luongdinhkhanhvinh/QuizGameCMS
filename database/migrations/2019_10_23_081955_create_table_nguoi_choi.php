<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNguoiChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NguoiChoi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dang_nhap',50)->unique();
            $table->text('mat_khau');
            $table->string('email',50)->unique();
            $table->text('hinh_dai_dien');
            $table->integer('diem_cao_nhat')->default(0);
            $table->integer('credit')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NguoiChoi');
    }
}
