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
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email');
            $table->string('groupname');
            $table->string('aff_sub_rand',50)->unique();
            $table->string('bank');
            $table->string('stk');
            $table->string('skype');
            $table->string('facebook');
            $table->string('phone');
            $table->integer('point');
            $table->integer('click');
            $table->integer('leads');
            $table->integer('clone');
            $table->ipAddress('ip');
            $table->string('country');
            $table->string('user_agent');
            $table->boolean('active');
            $table->boolean('status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
