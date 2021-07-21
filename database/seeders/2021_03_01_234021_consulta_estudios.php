<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConsultaEstudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('consulta_estudios',function(Blueprint $table){
          $table->increments('idces');

          $table->integer('idconsulta')->unsigned();
          $table->foreign('idconsulta')->references('idconsulta')->on('consultas');

          $table->integer('idestudio')->unsigned();
          $table->foreign('idestudio')->references('idestudio')->on('estudios');

          $table->integer('idpaciente')->unsigned();
          $table->foreign('idpaciente')->references('idpaciente')->on('pacientes');
          $table->string('fecha_estudio',10);
          $table->string('hora_estudio',10);
          $table->string('observaciones',255);
          $table->string('archivo_adjunto');
         
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
        Schema::drop('consulta_estudios');
    }
}

