<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasCompromisos extends Migration
{
    public function up()
    {
        Schema::rename('danielbecerra_urtseguimiento_compromisos', 'danielbecerra_urtseguimiento_visitas_compromisos');
    }
    
    public function down()
    {
        Schema::rename('danielbecerra_urtseguimiento_visitas_compromisos', 'danielbecerra_urtseguimiento_compromisos');
    }
}
