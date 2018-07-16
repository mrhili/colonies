<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMrhiliAsociationsAsociationsWorkers2 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mrhili_asociations_asociations_workers');
    }
    
    public function down()
    {
        Schema::create('mrhili_asociations_asociations_workers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('worker_id');
            $table->integer('asociation_id');
        });
    }
}
