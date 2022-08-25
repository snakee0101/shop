<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('cause');
            $table->text('comment')->nullable();
            $table->morphs('object');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();

            $table->unique(['object_id', 'object_type', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
