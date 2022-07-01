<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('caption');
            $table->string('description');
            $table->string('image_url_square');
            $table->string('image_url_rectangle');
            $table->foreignId('category_id')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}
