<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComparisonTable extends Migration
{
    public function up()
    {
        Schema::create('comparison', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('product_id')->references('id')->on('products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comparison');
    }
}
