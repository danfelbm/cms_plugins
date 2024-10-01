<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraUrtseguimientoVisitasComentarios extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_urtseguimiento_visitas_comentarios', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('user_id');
            $table->integer('comentario');
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_urtseguimiento_visitas_comentarios');
    }
}
