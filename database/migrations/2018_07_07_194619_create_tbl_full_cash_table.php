<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblFullCashTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('tbl_full_cash', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cusid');
            $table->foreign('cusid')->references('id')->on('tbl_customer');
            $table->integer('project_id');
            $table->integer('block_no');
            $table->decimal('Total_price');
            $table->decimal('Discount');
            $table->decimal('Total_selling_price');
            
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
