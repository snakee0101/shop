<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTagTable extends Migration
{
    public function up()
    {
        Schema::create('news_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')
                  ->references('id')
                  ->on('news')
                  ->cascadeOnDelete();

            $table->foreignId('tag_id')
                  ->references('id')
                  ->on('tags')
                  ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_tag');
    }
}
