<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_booking', function (Blueprint $table) {
           
 $table->increments('custbookId');
$table->integer('customerId')->unsigned();
$table->integer('BookId')->unsigned();
$table->foreign('customerId')->references('customerId')->on('customers')->onDelete('cascade');
$table->foreign('BookId')->references('BookId')->on('booking')->onDelete('cascade');
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
        Schema::dropIfExists('customers_booking');
    }
}
