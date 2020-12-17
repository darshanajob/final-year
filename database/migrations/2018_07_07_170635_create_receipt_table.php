<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('receipt', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('Day');
            $table->integer('ConNo');
            $table->string('Sex');
            $table->string('Of');
            $table->string('Cash_Cheque_No');
            $table->string('Drawn');
            $table->string('being');
            $table->decimal('Rs');
            $table->integer('cusid');
            $table->foreign('cusid')->references('id')->on('tbl_customer');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
