<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasComentarios extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_comentarios', function($table)
        {
            $table->text('comentario')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_comentarios', function($table)
        {
            $table->integer('comentario')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
