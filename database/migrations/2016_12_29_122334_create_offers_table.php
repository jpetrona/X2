<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers',function(Blueprint $table){
            $table->increments('id');
            $table->string('off_id');
            $table->string('off_name');
            $table->string('point');
            $table->string('networkid',50);
            $table->string('payout');
            $table->string('dailycap');
            $table->string('country');
            $table->string('img_link');
            $table->string('tracking');
            $table->string('des');
            $table->string('os');
            $table->string('rand_id',20)->unique();
            $table->string('incent');
            $table->string('click');
            $table->string('lead');
            $table->string('status');
            $table->timestamps();
            $table->foreign('networkid')->references('networkid')->on('network')->onDelete('cascade');
            $table->foreign('os')->references('text')->on('menu_banner')->onDelete('cascade');

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
