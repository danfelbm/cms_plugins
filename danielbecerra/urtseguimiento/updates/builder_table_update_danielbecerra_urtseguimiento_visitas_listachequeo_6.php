<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasListachequeo6 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->integer('seguimiento_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->integer('seguimiento_id')->nullable(false)->change();
        });
    }
}
