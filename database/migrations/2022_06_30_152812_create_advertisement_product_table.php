<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementProductTable extends Migration
{
    public function up()
    {
        Schema::create('advertisement_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('advertisement_id')
                  ->references('id')
                  ->on('advertisements')
                  ->cascadeOnDelete();
            $table->foreignId('product_id')
                  ->references('id')
                  ->on('products')
                  ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('advertisement_product');
    }
}
