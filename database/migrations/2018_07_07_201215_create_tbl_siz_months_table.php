<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSizMonthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_siz_months', function (Blueprint $table) {
         $table->increments('id');
            $table->decimal('Installments_free');
            $table->integer('No_Installments');
            $table->dateTime('due_date');
            $table->decimal('late_payment_free');
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('tbl_project');
            $table->integer('cusid');
            $table->foreign('cusid')->references('id')->on('tbl_customer');
            $table->decimal('payment_prograss');
            $table->decimal('Total_payment');
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
