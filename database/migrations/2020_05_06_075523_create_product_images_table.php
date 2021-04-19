<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product_and_Images', function (Blueprint $table) {
            $table->integer('product_Id')->unsigned();
            $table->integer('images_Id')->unsigned();
            $table->primary(['product_Id', 'images_Id' ]);
            $table->foreign('product_Id')->references('id')->on('Product')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('images_Id')->references('id')->on('Images')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('Product_and_Images');
    }
}
