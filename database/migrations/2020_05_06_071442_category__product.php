<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Category_Product', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('category_Name')->nullable();
            $table->string('category_Slug');
            $table->float('category_Parent');
            $table->string('category_image')->nullable();
            $table->string('category_Description');
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
        Schema::dropIfExists('Category_Product');
    }
}
