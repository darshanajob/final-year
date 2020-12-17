<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCustomerPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer_purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cusid');
            $table->foreign('cusid')->references('id')->on('tbl_customer');
            $table->string('c_name');
            $table->string('pr_name');
            $table->foreign('pr_name')->references('id')->on('tbl_project');
            $table->decimal('deposite');
            $table->dateTime('j_Date');
            $table->dateTime('due_Date');
            $table->string('payment_type');
            $table->integer('Block_No');
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
