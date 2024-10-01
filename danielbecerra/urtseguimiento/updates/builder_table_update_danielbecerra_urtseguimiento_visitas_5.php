<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoVisitas5 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas', function($table)
        {
            $table->timestamp('fecha')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_visitas', function($table)
        {
            $table->dateTime('fecha')->nullable(false)->change();
        });
    }
}
