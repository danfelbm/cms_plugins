<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasCompromisos2 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_compromisos', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_compromisos', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
