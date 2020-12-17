<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_project', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pj_id');
            $table->integer('district_id');
            $table->string('location');
            $table->string('tot_area');
            $table->string('pj_name');
            $table->integer('no_of_blocks');
          
            
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
