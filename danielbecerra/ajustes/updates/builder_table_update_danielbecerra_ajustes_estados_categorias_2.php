<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraAjustesEstadosCategorias2 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_ajustes_estados_categorias', function($table)
        {
            $table->integer('sort_id')->unsigned();
            $table->integer('nest_left')->nullable()->unsigned();
            $table->integer('nest_right')->nullable()->unsigned();
            $table->integer('nest_depth')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_ajustes_estados_categorias', function($table)
        {
            $table->dropColumn('sort_id');
            $table->dropColumn('nest_left');
            $table->dropColumn('nest_right');
            $table->dropColumn('nest_depth');
        });
    }
}
