<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraAjustesEstadosItems3 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_ajustes_estados_items', function($table)
        {
            $table->dropColumn('parent_id');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_ajustes_estados_items', function($table)
        {
            $table->integer('parent_id')->nullable();
        });
    }
}
