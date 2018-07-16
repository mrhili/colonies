<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMrhiliAsociationsEW extends Migration
{
    public function up()
    {
        Schema::create('mrhili_asociations_e_w', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('association_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->primary(['association_id','event_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mrhili_asociations_e_w');
    }
}
