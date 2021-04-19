<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('product_Name')->nullable();
            $table->string('product_Description');
            $table->string('product_Url');
            $table->float('product_Price')->nullable();
            $table->string('product_Discount');
            $table->integer('category_Id')->unsigned();
            $table->foreign('category_Id')->references('id')->on('Category_Product')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('Product');
    }
}
