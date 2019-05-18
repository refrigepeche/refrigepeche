<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicheTravailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fiche_travail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imputation');
            $table->date('numero');
            $table->dateTime('date_debut');
            $table->integer('date_fin');
            $table->text('motif');
            $table->string('service');
            $table->string('intervenant');
            $table->integer('qte');
            $table->string('designation');
            $table->string('ref');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Fiche_travail');
    }
}