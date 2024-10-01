<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraUrtseguimientoListachequeo extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_urtseguimiento_listachequeo', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('nombre');
            $table->integer('parent_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_urtseguimiento_listachequeo');
    }
}
