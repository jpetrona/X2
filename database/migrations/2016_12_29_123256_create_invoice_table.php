<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice',function(Blueprint $table){
            $table->increments('id');
            $table->string('aff_sub_rand',50);
            $table->string('payout');
            $table->string('money');
            $table->string('bank');
            $table->string('name');
            $table->string('stk');
            $table->string('paid');
            $table->timestamps();
            $table->forigen('aff_sub_rand')->references('aff_sub_rand')->on('users')->onDelete('cascade');
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
