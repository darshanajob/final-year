<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBankLoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tbl_bank_loan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('cus_job_type');
            $table->dateTime('due_date');
            $table->decimal('deposit');
            $table->dateTime('payment_starting_date');
            $table->decimal('total_payment');
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
