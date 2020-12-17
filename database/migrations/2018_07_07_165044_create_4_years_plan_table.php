<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create4YearsPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('4_years_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('Total_price');
            $table->integer('No_Installments');
            $table->decimal('Installments_free');
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
