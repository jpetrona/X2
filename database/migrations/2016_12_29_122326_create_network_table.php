<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network',function(Blueprint $table){
            $table->increments('id');
            $table->string('networkname');
            $table->string('api');
            $table->string('networkid',50)->unique();
            $table->integer('rate');
            $table->string('aff_sub',100);
            $table->string('platform',100);
            $table->boolean('status');
            $table->string('postback');
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
        Schema::drop('network');
    }
}
