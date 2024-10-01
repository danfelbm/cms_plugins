<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraUrtseguimientoVisitasOcurrencias extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_urtseguimiento_visitas_ocurrencias', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('visita_id');
            $table->string('observaciones');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_urtseguimiento_visitas_ocurrencias');
    }
}
