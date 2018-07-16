<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsAW extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_a_w', function($table)
        {
            $table->integer('worker_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_a_w', function($table)
        {
            $table->integer('worker_id')->unsigned(false)->change();
        });
    }
}
