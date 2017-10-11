<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('price');
            $table->integer('discount');        
            $table->integer('rating')->default(1);         //danh gia
            $table->string('imageUrl')->default("/images/ab.png");           
            $table->unsignedInteger('quanity');//so luong
            $table->string('description');
            $table->integer('priority');// yuusendo
            $table->unsignedInteger('categoryId')->default(0);
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
        Schema::dropIfExists('products');
    }
}
