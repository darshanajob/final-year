<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('login_sec', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Log_id');
            $table->string('Page');
            $table->string('Activity');
            $table->dateTime('Login_time');
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
