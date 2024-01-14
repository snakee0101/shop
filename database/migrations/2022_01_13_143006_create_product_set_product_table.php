<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSetProductTable extends Migration
{
    public function up()
    {
        Schema::create('product_set_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_set_id')->references('id')->on('product_sets');
            $table->foreignId('product_id')->references('id')->on('products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_set_product');
    }
}
