<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->string('category_id');
            $table->string('breed_id');
            $table->string('product_name');
            $table->string('product_image_main');
            $table->string('product_image1');
            $table->string('product_image2');
            $table->string('product_image3');
            $table->string('product_gender');
            $table->string('product_tiem');
            $table->string('product_xuatxu');
            $table->integer('product_age');
            $table->string('product_price');
            $table->text('product_description');
            $table->integer('product_status');
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
        Schema::dropIfExists('tb_product');
    }
}
