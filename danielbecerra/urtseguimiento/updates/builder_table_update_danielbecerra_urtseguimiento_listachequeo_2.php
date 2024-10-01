<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoListachequeo2 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_listachequeo', function($table)
        {
            $table->integer('sort_order')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_listachequeo', function($table)
        {
            $table->integer('sort_order')->default(null)->change();
        });
    }
}
