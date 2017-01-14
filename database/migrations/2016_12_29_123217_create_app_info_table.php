<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_info',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('OS');
            $table->string('size');
            $table->string('version');
            $table->string('status');
            $table->string('link_offer');
            $table->string('link_img');
            $table->string('img_link');
            $table->longText('content');
            $table->string('producer');
            $table->string('date_update');
            $table->string('view');
            $table->string('hot');
            $table->string('end_tracking');
            $table->string('net');
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
        Schema::drop('app_info');
    }
}
