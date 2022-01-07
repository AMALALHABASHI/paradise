<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('delivery_id');
            $table->bigInteger('costumer_id');
            $table->bigInteger('orderer_id')->unsigned();
            $table->foregin('orderer_id')->references('orderer_id')-> on('orders') ->onDelete('cascade');
            $table->date(dd , mm, yy)('date');
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
        Schema::dropIfExists('deliveries');
    }
}
