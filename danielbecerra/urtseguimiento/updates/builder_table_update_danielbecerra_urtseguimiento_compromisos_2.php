<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoCompromisos2 extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_compromisos', function($table)
        {
            $table->renameColumn('listachequeo_item_id', 'listachequeo_items_id');
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_compromisos', function($table)
        {
            $table->renameColumn('listachequeo_items_id', 'listachequeo_item_id');
        });
    }
}
