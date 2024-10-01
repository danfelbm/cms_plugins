<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasListachequeo4 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->integer('seguimiento_id');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->dropColumn('seguimiento_id');
        });
    }
}
