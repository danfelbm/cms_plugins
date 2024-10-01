<?php namespace DanielBecerra\Ajustes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDanielbecerraAjustesDepartamentos extends Migration
{
    public function up()
    {
        Schema::create('danielbecerra_ajustes_departamentos', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nombre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('danielbecerra_ajustes_departamentos');
    }
}
