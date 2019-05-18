<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandeAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_achat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client');
            $table->string('ref'); 
            $table->integer('nbr'); 
            $table->date('date');
            $table->string('imputation'); 
            $table->string('fournisseur'); 
            $table->string('numero'); 
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
        Schema::dropIfExists('Demande_achat');
    }
}