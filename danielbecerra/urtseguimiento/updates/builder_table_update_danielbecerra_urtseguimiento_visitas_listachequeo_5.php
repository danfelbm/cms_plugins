<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitasListachequeo5 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->integer('resultado_id')->nullable()->unsigned();
            $table->dropColumn('resultado');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas_listachequeo', function($table)
        {
            $table->dropColumn('resultado_id');
            $table->string('resultado', 255)->nullable();
        });
    }
}
