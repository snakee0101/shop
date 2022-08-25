<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormMessageTable extends Migration
{
    public function up()
    {
        Schema::create('contact_form_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->boolean('is_replied')->default(false);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('contact_form_messages');
    }
}
