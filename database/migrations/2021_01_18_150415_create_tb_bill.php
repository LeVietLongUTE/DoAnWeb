<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bill', function (Blueprint $table) {
            $table->id();
            $table->integer('idND');
            $table->dateTime('NgayLap');
            $table->string('NguoiNhan');
            $table->string('sdt');
            $table->string('DiaChi');
            $table->string('TongTien');
            $table->string('TrangThai');
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
        Schema::dropIfExists('tb_bill');
    }
}
