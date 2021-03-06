<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('discount_classname');
            $table->morphs('item');
            $table->float('value'); //discount value must always be positive
            $table->timestamp('active_since')->nullable();
            $table->timestamp('active_until')->nullable();
            $table->string('coupon_code')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
