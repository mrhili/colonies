<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsAW2 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_a_w', function($table)
        {
            $table->dropPrimary(['asociation_id','worker_id']);
            $table->renameColumn('asociation_id', 'association_id');
            $table->primary(['association_id','worker_id']);
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_a_w', function($table)
        {
            $table->dropPrimary(['association_id','worker_id']);
            $table->renameColumn('association_id', 'asociation_id');
            $table->primary(['asociation_id','worker_id']);
        });
    }
}
