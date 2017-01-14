<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('clicks',function(Blueprint $table){
            $table->increments('id');
            $table->string('aff_sub_rand',50);
            $table->string('rand_id',20);
            $table->ipAddress('ip');
            $table->timestamps();
            $table->foreign('aff_sub_rand')->references('aff_sub_rand')->on('users')->onDelete('cascade');
            $table->foreign('rand_id')->references('rand_id')->on('offers')->onDelete('cascade');
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
