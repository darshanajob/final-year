<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCustomerBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer_bank', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cusid');
            $table->foreign('cusid')->references('id')->on('tbl_customer');
            $table->string('b_name');
            $table->string('b_addr');
            $table->string('b_acc');
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
