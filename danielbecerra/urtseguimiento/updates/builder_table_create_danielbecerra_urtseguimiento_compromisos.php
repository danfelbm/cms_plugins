<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraUrtseguimientoCompromisos extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_urtseguimiento_compromisos', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('visita_id');
            $table->integer('listachequeo_item_id')->nullable();
            $table->text('compromiso');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_urtseguimiento_compromisos');
    }
}
