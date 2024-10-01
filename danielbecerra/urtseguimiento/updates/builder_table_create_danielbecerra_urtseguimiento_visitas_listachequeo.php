<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraUrtseguimientoVisitasListachequeo extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('visita_id');
            $table->string('listachequeo_item_id');
            $table->string('resultado');
            $table->string('observaciones');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_urtseguimiento_visitas_listachequeo');
    }
}
