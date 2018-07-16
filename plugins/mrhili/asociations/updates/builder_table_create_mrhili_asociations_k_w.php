<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMrhiliAsociationsKW extends Migration
{
    public function up()
    {
        Schema::create('mrhili_asociations_k_w', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('kafa2a_id')->unsigned();
            $table->integer('worker_id')->unsigned();
            $table->primary(['kafa2a_id','worker_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mrhili_asociations_k_w');
    }
}
