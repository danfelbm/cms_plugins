<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasListachequeo extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->string('observaciones', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->string('observaciones', 255)->nullable(false)->change();
        });
    }
}
