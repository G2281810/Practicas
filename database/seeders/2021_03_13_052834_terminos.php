<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Terminos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('terminos',function(Blueprint $table){
          $table->increments('idtermino');
          $table->string('usuario',10);
          $table->string('correo',10);
          $table->string('contraseña',255);
          $table->string('terminos');
          $table->rememberToken();
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
        Schema::drop('terminos');
    }
}
