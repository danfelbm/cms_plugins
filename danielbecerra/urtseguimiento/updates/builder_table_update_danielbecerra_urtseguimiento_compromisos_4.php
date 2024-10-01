<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoCompromisos4 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_compromisos', function($table)
        {
            $table->renameColumn('visitasocurrencia_id', 'seguimiento_id');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_compromisos', function($table)
        {
            $table->renameColumn('seguimiento_id', 'visitasocurrencia_id');
        });
    }
}
