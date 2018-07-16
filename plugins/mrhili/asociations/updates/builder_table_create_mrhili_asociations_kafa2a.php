<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMrhiliAsociationsKafa2a extends Migration
{
    public function up()
    {
        Schema::create('mrhili_asociations_kafa2a', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mrhili_asociations_kafa2a');
    }
}
