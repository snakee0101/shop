<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadgesTable extends Migration
{
    public function up()
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->foreignId('product_id')
                  ->references('id')
                  ->on('products')
                  ->cascadeOnDelete();

            $table->foreignId('badge_style_id')
                  ->references('id')
                  ->on('badge_styles')
                  ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('badges');
    }
}
