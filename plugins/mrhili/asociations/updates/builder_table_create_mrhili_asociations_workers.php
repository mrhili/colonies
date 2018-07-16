<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMrhiliAsociationsWorkers extends Migration
{
    public function up()
    {
        Schema::create('mrhili_asociations_workers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('last_name');
            $table->date('born_at');
            $table->string('function');
            $table->boolean('maried');
            $table->string('level_study');
            $table->string('field')->nullable();
            $table->string('tel');
            $table->string('email');
            $table->string('region');
            $table->string('city');
            $table->string('adress');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mrhili_asociations_workers');
    }
}
