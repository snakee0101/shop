<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicsTable extends Migration
{
    public function up()
    {
        Schema::create('characteristics', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->foreignId('category_id')
                  ->references('id')
                  ->on('categories')
                  ->cascadeOnDelete();

            $table->unique(['name', 'category_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('characteristics');
    }
}
