<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMrhiliAsociations extends Migration
{
    public function up()
    {
        Schema::create('mrhili_asociations_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('domaine')->nullable();
            $table->string('region')->nullable();
            $table->string('adresse')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mrhili_asociations_');
    }
}
