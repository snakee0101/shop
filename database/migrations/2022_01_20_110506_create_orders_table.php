<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_paid');
            $table->string('country');
            $table->string('address')->nullable();
            $table->string('apartment')->nullable();
            $table->string('post_office_address')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postcode');
            $table->timestamp('shipping_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
