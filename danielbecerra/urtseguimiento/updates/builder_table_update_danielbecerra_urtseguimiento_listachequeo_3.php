<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoListachequeo3 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_listachequeo', function($table)
        {
            $table->integer('parent_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_listachequeo', function($table)
        {
            $table->integer('parent_id')->nullable(false)->change();
        });
    }
}
