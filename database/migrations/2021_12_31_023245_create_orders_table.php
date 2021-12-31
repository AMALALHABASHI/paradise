<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->bigInteger('costumer_id');
            $table->foregin('costumer_id')->references('id')-> on('users') ->onDelete('cascade');
            $table->bigIncrements('product_id');
            $table->foregin('product_id')->references('product_id')-> on('products') ->onDelete('cascade');
            $table->date(dd , mm, yy)('date');
            $table->bigIncrements('num_of_product');
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
        Schema::dropIfExists('orders');
    }
}
