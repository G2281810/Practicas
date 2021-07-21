<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Medicamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos',function(Blueprint $table){
            $table->increments('idmed');
            $table->string('nombre',50);
  
            $table->integer('idtipomed')->unsigned();
            $table->foreign('idtipomed')->references('idtipomed')->on('tipo_medicamentos');
  
            $table->string('presentacion',50);
            $table->string('susta_activa',20);
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
        Schema::drop('medicamentos');
    }
}
