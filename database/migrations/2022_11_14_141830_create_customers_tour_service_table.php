<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTourServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_tour_service', function (Blueprint $table) {
            $table->increments('custtourId');
            $table->integer('customerId')->unsigned();
            $table->integer('tourId')->unsigned();
            $table->foreign('customerId')->references('customerId')->on('customers')->onDelete('cascade');
            $table->foreign('tourId')->references('tourId')->on('tour_service')->onDelete('cascade');
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
        Schema::dropIfExists('customers_tour_service');
    }
}
