<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->references('id')
                  ->on('users');
            $table->smallInteger('rating');  //5-star rating system: 1 - 5
            $table->text('comment');
            $table->foreignId('parent_id')
                  ->references('id')
                  ->on('reviews');
            $table->text('advantages');
            $table->text('disadvantages');
            $table->boolean('notify_on_reply');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
