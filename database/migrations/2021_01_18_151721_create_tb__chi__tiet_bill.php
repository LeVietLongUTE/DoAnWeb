<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbChiTietBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_Chi_Tiet_bill', function (Blueprint $table) {
            $table->integer('MaHD');
            $table->integer('MaSP');
            $table->integer('Soluong');
            $table->integer('DonGia');
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
        Schema::dropIfExists('tb_Chi_Tiet_bill');
    }
}
