<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraAjustesEstadosItems extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_ajustes_estados_items', function($table)
        {
            $table->string('nombre')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('descripcion')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_ajustes_estados_items', function($table)
        {
            $table->integer('nombre')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->integer('descripcion')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
