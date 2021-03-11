<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bike_no');
            $table->string('engine_no');
            $table->string('chassis_no');
            $table->string('color');
            $table->text('description')->nullable();


            $table->integer('purchase_price')->nullable();

            $table->string('sold_type')->nullable();//cash - credit
            $table->integer('sold_price')->nullable();

            $table->integer('purchase_from')->unsigned();
            $table->integer('sold_to')->unsigned();

            $table->dateTime('purchase_date')->nullable();
            $table->dateTime('sold_date')->nullable();


//            $table->foreignId('purchase_from')->constrained('user_list');
//            $table->foreignId('sold_to')->constrained('user_list');



            $table->timestamps();
        });

        Schema::table('bike', function($table) {
//            $table->foreign('purchase_from')->references('id')->on('user_list');
//            $table->foreign('sold_to')->references('id')->on('user_list');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bike');
    }
}
