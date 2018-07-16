<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMrhiliAsociationsWorkersPivote extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mrhili_asociations_workers_pivote');
    }
    
    public function down()
    {
        Schema::create('mrhili_asociations_workers_pivote', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('asociation_id')->unsigned();
            $table->integer('worker_id')->unsigned();
        });
    }
}
