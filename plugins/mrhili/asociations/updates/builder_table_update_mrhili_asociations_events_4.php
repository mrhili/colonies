<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsEvents4 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->integer('asociation_id');
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->dropColumn('asociation_id');
        });
    }
}
