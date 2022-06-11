<?php

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
            $table->foreignId('seller_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('product_name');
            $table->string('brand');
            $table->string('description');
            $table->integer('MRP');
            $table->integer('discount')->nullable();
            $table->integer('base_price');
            $table->integer('size')->nullable();
            $table->string('category');
            $table->string('product_image');
            $table->enum('verified', [0,1])->default(0);
            $table->enum('sold', [0,1])->default(0);
            $table->enum('added_for_auction', [0,1])->default(0);
            $table->integer('sold_price')->nullable();
            $table->foreignId('buyer_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
