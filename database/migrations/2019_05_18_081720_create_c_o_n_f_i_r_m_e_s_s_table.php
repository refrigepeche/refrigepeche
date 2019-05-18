<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCONFIRMESSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CONFIRMES', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('ref');
            $table->integer('qte');
            $table->string('unite');
            $table->string('imputation');
            $table->dateTime('dateDemande');
            $table->timestamp('dateConfirmation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CONFIRMES');
    }
}
