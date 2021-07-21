<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tratamientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tratamientos',function(Blueprint $table){
          $table->increments('idtratamiento');
          $table->string('nombre',50);
          $table->string('duracion',100);
          $table->string('medicamento',50);
          $table->string('precio',10);

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
        Schema::drop('tratamientos');
    }
}
