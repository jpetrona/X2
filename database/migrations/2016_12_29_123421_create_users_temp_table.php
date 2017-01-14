<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users_temp',function(Blueprint $table){
            $table->increments('id');
            $table->string('aff_sub_rand',50);
            $table->string('user_code',50)->unique();
            $table->ipAddress('ip');
            $table->string('user_agent');
            $table->string('point',20);
            $table->string('lead',20);
            $table->timestamps();
            $table->foreign('aff_sub_rand')->references('aff_sub_rand')->on('users')->onDelete('cascade');

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
