<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasSeguimientos2 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_seguimientos', function($table)
        {
            $table->timestamp('fecha');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_seguimientos', function($table)
        {
            $table->dropColumn('fecha');
        });
    }
}
