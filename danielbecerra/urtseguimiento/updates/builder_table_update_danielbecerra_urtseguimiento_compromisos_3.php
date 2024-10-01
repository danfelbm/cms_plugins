<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoCompromisos3 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_compromisos', function($table)
        {
            $table->integer('visitasocurrencia_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_compromisos', function($table)
        {
            $table->dropColumn('visitasocurrencia_id');
        });
    }
}
