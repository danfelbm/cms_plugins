<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraAjustesEstadosCategorias extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_ajustes_estados_categorias', function($table)
        {
            $table->integer('parent_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_ajustes_estados_categorias', function($table)
        {
            $table->dropColumn('parent_id');
        });
    }
}
