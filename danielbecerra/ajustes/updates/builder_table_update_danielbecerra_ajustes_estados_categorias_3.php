<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraAjustesEstadosCategorias3 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_ajustes_estados_categorias', function($table)
        {
            $table->renameColumn('sort_id', 'sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_ajustes_estados_categorias', function($table)
        {
            $table->renameColumn('sort_order', 'sort_id');
        });
    }
}
