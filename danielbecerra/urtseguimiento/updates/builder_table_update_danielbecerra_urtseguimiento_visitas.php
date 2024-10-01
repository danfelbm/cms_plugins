<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitas extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
