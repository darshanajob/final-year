<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPaymentProrassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tbl_payment_prorass', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cusid');
            $table->foreign('cusid')->references('id')->on('tbl_customer');
            $table->integer('4_year_id');
            $table->dateTime('due_date');
            $table->dateTime('settle_date');
            $table->decimal('over_due_amount');
            $table->decimal('paid_amount');
            $table->integer('over_due');
            
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
