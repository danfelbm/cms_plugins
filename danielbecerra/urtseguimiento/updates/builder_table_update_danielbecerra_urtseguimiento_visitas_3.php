<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitas3 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas', function($table)
        {
            $table->dropColumn('fecha_visita');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas', function($table)
        {
            $table->dateTime('fecha_visita');
        });
    }
}
