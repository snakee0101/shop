<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderCredentialsTable extends Migration
{
    public function up()
    {
        Schema::create('order_credentials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->references('id')
                                                ->on('orders')
                                                ->cascadeOnDelete();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_credentials');
    }
}
