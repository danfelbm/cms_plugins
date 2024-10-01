<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasCompromisos5 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_compromisos', function($table)
        {
            $table->timestamp('fecha');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_compromisos', function($table)
        {
            $table->dropColumn('fecha');
        });
    }
}
