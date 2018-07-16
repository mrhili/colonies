<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsEvents5 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->renameColumn('asociation_id', 'asociation');
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->renameColumn('asociation', 'asociation_id');
        });
    }
}
