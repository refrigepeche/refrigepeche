<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBASESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BASE', function (Blueprint $table) {
            $table->string('NCODE')->nullable(false)->change(); 
            $table->string('No')->nullable(); 
            $table->string('ECLATER_catalogue_4')->nullable(); 
            $table->string('REPERE_info_libre')->nullable(); 
            $table->string('REFERENCE_info_libre')->nullable(); 
            $table->string('ANGLAIS_désignation')->nullable(); 
            $table->string('DESIGN_Français_langue2')->nullable();
            $table->string('ANCIEN_CODE_info_libre')->nullable(); 
            $table->string('EMPLACEMENT')->nullable(); 
            $table->string('FAMILLE')->nullable();
            $table->string('CATALOG1')->nullable(false); 
            $table->string('CATALOG2')->nullable(false); 
            $table->string('CATALOG3')->nullable(); 
            $table->string('UNITE')->nullable(); 
            $table->string('REPERE2')->nullable();
            $table->string('ECLATE2')->nullable();
            $table->string('REPERE3')->nullable();
            $table->string('ECLATE3')->nullable();
            $table->string('REPERE4')->nullable();
            $table->string('ECLATE4')->nullable();
            $table->string('REPERE5')->nullable();
            $table->string('ECLATE5')->nullable();
            $table->string('REPERE6')->nullable();
            $table->string('ECLATE6')->nullable();
            $table->string('REPERE7')->nullable();
            $table->string('ECLATE7')->nullable();
            $table->string('REPERE8')->nullable();
            $table->string('ECLATE8')->nullable();
            $table->string('REPERE9')->nullable();
            $table->string('ECLATE9')->nullable();
            $table->string('REPERE10')->nullable();
            $table->string('ECLATE10')->nullable();
            $table->string('REPERE11')->nullable();
            $table->string('ECLATE11')->nullable();
            $table->string('REPERE12')->nullable();
            $table->string('ECLATE12')->nullable();
            $table->string('REPERE13')->nullable();
            $table->string('ECLATE13')->nullable();
            $table->string('REPERE14')->nullable();
            $table->string('ECLATE14')->nullable();
            $table->string('REPERE15')->nullable();
            $table->string('ECLATE15')->nullable();
            $table->string('RMRQ')->nullable();
            $table->string('REF_ALT')->nullable();
            $table->string('FIELD45')->nullable();
            $table->string('PICT1')->nullable();
            $table->string('PICT2')->nullable();
            $table->string('PICT3')->nullable();
            $table->string('PICT4')->nullable();
            $table->string('FIELD50')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BASE');
    }
}