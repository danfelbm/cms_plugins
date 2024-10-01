<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraUrtseguimientoVisitas extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_urtseguimiento_visitas', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('sede_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_urtseguimiento_visitas');
    }
}
