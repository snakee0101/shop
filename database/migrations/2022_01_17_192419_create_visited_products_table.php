<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitedProductsTable extends Migration
{
    public function up()
    {
        Schema::create('visited_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('product_id')->references('id')->on('products');

            $table->unique(['user_id', 'product_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visited_products');
    }
}
