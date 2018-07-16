<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMrhiliAsociationsAW extends Migration
{
    public function up()
    {
        Schema::create('mrhili_asociations_a_w', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('asociation_id')->unsigned();
            $table->integer('worker_id');
            $table->primary(['asociation_id','worker_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mrhili_asociations_a_w');
    }
}
