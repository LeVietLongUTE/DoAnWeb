<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBreedProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_breed_product', function (Blueprint $table) {
            $table->Increments('breed_id');
            $table->string('category_id');
            $table->string('breed_name');
            $table->string('breed_description');
            $table->integer('breed_status');
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
        Schema::dropIfExists('tb_breed_product');
    }
}
