<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraAjustesCiudades extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_ajustes_ciudades', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('departamento_id');
            $table->string('nombre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_ajustes_ciudades');
    }
}
