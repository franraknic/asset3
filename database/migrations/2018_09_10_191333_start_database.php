<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StartDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('companies', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
        });
        */

        Schema::create('assets', function (Blueprint $table){
            $table->increments('id');
            $table->string('qr');
            $table->string('name');
            $table->string('comment');
            //$table->integer('company_id')->unsigned();
            //$table->foreign('company_id')->references('id')->on('companies');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
        //Schema::dropIfExists('companies');

    }
}
