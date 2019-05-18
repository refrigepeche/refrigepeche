<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateREFUSESSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
        Schema::dropIfExists('REFUSES');
    }
}
