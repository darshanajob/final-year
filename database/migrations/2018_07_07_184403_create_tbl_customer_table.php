<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tbl_customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('nic');
            $table->string('p_addr');
            $table->integer('p_tele');
            $table->string('job');
            $table->string('o_addr');
            $table->integer('o_tele');
            $table->string('citizenship');
            $table->integer('age');
            $table->decimal('income');
            $table->string('income_tax');
            $table->string('dependents');
            $table->dateTime('j_Date');
            $table->decimal('Mnthly_incme');
            $table->string('road_image');
            $table->dateTime('updated_at');
             $table->dateTime('created_at');
           


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
