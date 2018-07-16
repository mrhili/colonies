<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsEvents7 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->renameColumn('asociation_id', 'association_id');
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->renameColumn('association_id', 'asociation_id');
        });
    }
}
