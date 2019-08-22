<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductProductImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            if(!Schema::hasTable('product_product_images')) {
                Schema::create('product_product_images', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->unsignedBigInteger('product_id');
                    $table->unsignedBigInteger('product_image_id');

                    $table->foreign('product_id')
                        ->references('id')
                        ->on('products');
                    $table->foreign('product_image_id')
                        ->references('id')
                        ->on('product_images');

                });
            }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_product_images');
    }
}
