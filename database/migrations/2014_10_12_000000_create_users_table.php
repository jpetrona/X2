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
            $table->string('fullname',32);
            $table->string('username',32)->unique();
            $table->string('password');
            $table->string('email',50);
            $table->string('groupname',30)->default('TIGER');
            $table->string('aff_sub_rand',50)->unique();
            $table->string('bank',20)->nullable();
            $table->string('stk',30)->nullable();
            $table->string('skype',20)->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('phone',20)->nullable();
            $table->integer('point')->default(0);
            $table->integer('click')->default(0);
            $table->integer('leads')->default(0);
            $table->integer('clone')->default(0);
            $table->ipAddress('ip');
            $table->string('country');
            $table->string('user_agent');
            $table->boolean('active')->default(0);
            $table->boolean('status')->default(0);
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
