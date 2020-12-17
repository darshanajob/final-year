<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProjectDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_project_discount', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pj_id');
            $table->foreign('pj_id')->references('id')->on('tbl_project');
            $table->decimal('perch_S_amount');
            $table->decimal('perch_E_amount');
            $table->decimal('discount_amount');
            $table->string('Plan_name');
            
          
            
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
