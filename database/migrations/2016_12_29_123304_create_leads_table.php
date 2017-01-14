<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads',function(Blueprint $table){
            $table->increments('id');
            $table->string('userid',50);
            $table->string('aff_sub_rand',50);
            $table->string('rand_id',20);
            $table->string('off_name');
            $table->integer('point');
            $table->ipAddress('ip');
            $table->timestamps();
            $table->foreign('aff_sub_rand')->references('aff_sub_rand')->on('users')->onDelete('cascade');
            $table->foreign('userid')->references('user_code')->on('users_temp')->onDelete('cascade');
            $table->foreign('rand_id')->references('rand_id')->on('offers');
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
