<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMrhiliAsociationsEvents extends Migration
{
    public function up()
    {
        Schema::create('mrhili_asociations_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('domain');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('region');
            $table->string('city');
            $table->string('adress');
            $table->text('desc')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mrhili_asociations_events');
    }
}
