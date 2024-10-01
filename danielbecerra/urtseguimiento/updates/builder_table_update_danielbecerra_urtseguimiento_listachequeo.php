<?php namespace DanielBecerra\UrtSeguimiento\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDanielbecerraUrtseguimientoListachequeo extends Migration
{
    public function up()
    {
        Schema::table('danielbecerra_urtseguimiento_listachequeo', function($table)
        {
            $table->integer('nest_left')->nullable()->unsigned();
            $table->integer('nest_right')->nullable()->unsigned();
            $table->integer('nest_depth')->nullable()->unsigned();
            $table->integer('sort_order')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('danielbecerra_urtseguimiento_listachequeo', function($table)
        {
            $table->dropColumn('nest_left');
            $table->dropColumn('nest_right');
            $table->dropColumn('nest_depth');
            $table->dropColumn('sort_order');
        });
    }
}
