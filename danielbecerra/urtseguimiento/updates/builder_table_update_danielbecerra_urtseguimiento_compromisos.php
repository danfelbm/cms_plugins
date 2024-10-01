<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoCompromisos extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_compromisos', function($table)
        {
            $table->integer('estado_id');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_compromisos', function($table)
        {
            $table->dropColumn('estado_id');
        });
    }
}
