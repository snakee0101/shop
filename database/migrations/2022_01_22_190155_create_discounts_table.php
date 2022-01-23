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
            $table->float('value');
            $table->timestamp('active_until')->nullable();
            $table->string('promocode')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
