<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferwallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerwall',function(Blueprint $table){
            $table->increments('id');
            $table->string('network',50);
            $table->string('iframe');
            $table->string('networkid',50);
            $table->string('pass',20);
            $table->string('secretKey',50);
            $table->string('dailypoint',20);
            $table->boolean('status');
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
        Schema::drop('offerwall');
    }
}
