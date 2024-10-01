<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraUrtseguimientoListachequeoItems extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_urtseguimiento_listachequeo_items', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('listachequeo_id');
            $table->string('nombre');
            $table->text('descripcion');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_urtseguimiento_listachequeo_items');
    }
}
