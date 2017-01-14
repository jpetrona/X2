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
            $table->string('network');
            $table->string('iframe');
            $table->string('networkid');
            $table->string('pass');
            $table->string('secretKey');
            $table->string('dailypoint');
            $table->string('status');
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
        //
    }
}
