<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristic_product', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')
                  ->references('id')
                  ->on('products');

            $table->foreignId('characteristic_id')
                  ->references('id')
                  ->on('characteristics');

            $table->string('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characteristic_product');
    }
}
