<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price');
            $table->text('guarantee_info');
            $table->text('payment_info');
            $table->enum('in_stock', [Product::STATUS_IN_STOCK, Product::STATUS_ENDS, Product::STATUS_OUT_OF_STOCK]);
            $table->timestamps();
            $table->foreignId('category_id')->nullable();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->nullOnDelete();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
