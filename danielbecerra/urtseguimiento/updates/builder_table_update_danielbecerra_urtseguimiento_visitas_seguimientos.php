<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasSeguimientos extends Migration
{
    public function up()
    {
        Schema::rename('danielbecerra_urtseguimiento_visitas_ocurrencias', 'danielbecerra_urtseguimiento_visitas_seguimientos');
    }
    
    public function down()
    {
        Schema::rename('danielbecerra_urtseguimiento_visitas_seguimientos', 'danielbecerra_urtseguimiento_visitas_ocurrencias');
    }
}
