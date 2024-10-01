<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraAjustesEstadosCategorias extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_ajustes_estados_categorias', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_ajustes_estados_categorias');
    }
}
