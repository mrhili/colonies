<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsWorkers5 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_workers', function($table)
        {
            $table->renameColumn('function', 'work');
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_workers', function($table)
        {
            $table->renameColumn('work', 'function');
        });
    }
}
