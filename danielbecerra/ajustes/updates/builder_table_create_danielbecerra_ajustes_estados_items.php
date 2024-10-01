<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraAjustesEstadosItems extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_ajustes_estados_items', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('estados_categorias_id');
            $table->integer('nombre');
            $table->integer('descripcion');
            $table->integer('parent_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_ajustes_estados_items');
    }
}
