<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitas4 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas', function($table)
        {
            $table->dateTime('fecha');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas', function($table)
        {
            $table->dropColumn('fecha');
        });
    }
}
