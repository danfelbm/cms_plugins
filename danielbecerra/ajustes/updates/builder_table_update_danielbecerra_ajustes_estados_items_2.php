<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraAjustesEstadosItems2 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_ajustes_estados_items', function($table)
        {
            $table->string('descripcion', 255)->nullable()->change();
            $table->integer('parent_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_ajustes_estados_items', function($table)
        {
            $table->string('descripcion', 255)->nullable(false)->change();
            $table->integer('parent_id')->nullable(false)->change();
        });
    }
}
