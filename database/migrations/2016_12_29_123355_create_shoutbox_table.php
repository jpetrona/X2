<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoutboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('shoutbox',function(Blueprint $table){
            $table->increments('id');
            $table->string('fullname',50);
            $table->string('off_id',20);
            $table->string('off_name');
            $table->string('point',10);
            $table->string('os',50);
            $table->ipAddress('ip');
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
        Schema::drop('shoutbox');
    }
}
