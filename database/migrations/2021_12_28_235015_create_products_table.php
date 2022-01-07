<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('product_id');
            $table->timestamps();
            $table->string('product_name');
            $table->text('description')->nullable();
            $table->double('price');
            $table->boolean('is_sale')->default(0);
            $table->double('sales')->nullable();
            $table->double('size');
            $table->string('color');
            $table->string('img')->nullable();
            $table->BigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->BigInteger('material_id')->unsigned();
            $table->foreign('material_id')->references('material_id')->on('raw_materials')->onDelete('cascade');

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
