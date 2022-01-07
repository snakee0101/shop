<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->morphs('object');
            $table->string('url');
            $table->string('title')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
