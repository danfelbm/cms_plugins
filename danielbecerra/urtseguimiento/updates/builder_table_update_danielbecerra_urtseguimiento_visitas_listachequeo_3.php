<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasListachequeo3 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
