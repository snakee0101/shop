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
            $table->foreignId('news_id');
            $table->foreignId('tag_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_tag');
    }
}
