<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraAjustesEstadosCategorias4 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_ajustes_estados_categorias', function($table)
        {
            $table->integer('sort_order')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_ajustes_estados_categorias', function($table)
        {
            $table->integer('sort_order')->default(null)->change();
        });
    }
}