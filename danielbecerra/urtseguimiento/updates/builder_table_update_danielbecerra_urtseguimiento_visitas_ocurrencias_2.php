<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasOcurrencias2 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_ocurrencias', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_ocurrencias', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
