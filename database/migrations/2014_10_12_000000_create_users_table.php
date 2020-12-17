<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('permission');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('status');
            $table->string('EmpNo');
            $table->string('Emp_name');	
            $table->integer('Con_No');
            $table->integer('empGroup');
            $table->foreign('empGroup')->references('id')->on('groups');
            $table->string('Image');
            $table->string('Full_Emp_name');
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
        Schema::dropIfExists('users');
    }
}
