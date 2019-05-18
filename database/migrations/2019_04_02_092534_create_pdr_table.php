<?php

use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //exec("mysql -u ".config('database.connections.mysql.username')." -p".\Config::get('database.connections.mysql.password')." -h localhost ".\Config::get('database.connections.mysql.database')." < database/sql/base.sql");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('BASE');
    }
}
