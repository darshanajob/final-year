<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblReSellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_re_sell', function (Blueprint $table) {
         $table->increments('id');
            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('tbl_project');
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
