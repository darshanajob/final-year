<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCustomerSpouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('tbl_customer_spouse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cusid');
            $table->foreign('cusid')->references('id')->on('tbl_customer');
            $table->string('s_name');
            $table->string('s_job');
            $table->string('s_o_addr');
            $table->integer('s_tele');
            $table->decimal('s_income');
            
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
