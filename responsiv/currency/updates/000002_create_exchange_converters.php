<?php namespace Responsiv\Currency\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('responsiv_currency_exchange_converters', function($table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('class_name')->nullable();
            $table->integer('refresh_interval')->default(24);
            $table->mediumText('config_data')->nullable();
            $table->boolean('is_enabled')->default(false);
            $table->boolean('is_default')->default(false);
            $table->integer('fallback_converter_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('responsiv_currency_exchange_converters');
    }
};
