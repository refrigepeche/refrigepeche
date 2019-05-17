<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BONS', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client');
            $table->string('ref');
            $table->integer('qte');
            $table->string('unite');
            $table->string('imputation');

            $table->timestamp('date');
        });

        Schema::create('CONFIRMES', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('ref');
            $table->integer('qte');
            $table->string('unite');
            $table->string('imputation');
            $table->dateTime('dateDemande');
            $table->timestamp('dateConfirmation');
        });

        Schema::create('REFUSES', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('ref');
            $table->integer('qte');
            $table->string('unite');
            $table->string('imputation');
            $table->dateTime('dateDemande');
            $table->timestamp('dateRefus');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BONS');
        Schema::dropIfExists('CONFIRMES');
        Schema::dropIfExists('REFUSES');
    }
}
