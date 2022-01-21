<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->morphs('item');
            $table->unsignedInteger('quantity');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
