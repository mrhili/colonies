<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsEW extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_e_w', function($table)
        {
            $table->dropPrimary(['association_id','event_id']);
            $table->renameColumn('association_id', 'worker_id');
            $table->primary(['worker_id','event_id']);
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_e_w', function($table)
        {
            $table->dropPrimary(['worker_id','event_id']);
            $table->renameColumn('worker_id', 'association_id');
            $table->primary(['association_id','event_id']);
        });
    }
}
