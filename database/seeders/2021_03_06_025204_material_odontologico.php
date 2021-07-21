<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaterialOdontologico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('material_odontologicos',function(Blueprint $table){
          $table->increments('idmaterial');
          $table->string('nombre',50);
          $table->string('marca',100);
          $table->string('precio',50);
          $table->string('fechareg',10);
          $table->string('horareg',10);
          $table->string('pzas_exis',10);
          $table->string('lote',10);

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
        Schema::drop('material_odontologico');
    }
}
