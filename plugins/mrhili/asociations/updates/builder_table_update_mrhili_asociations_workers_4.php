<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsWorkers4 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_workers', function($table)
        {
            $table->text('cv')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_workers', function($table)
        {
            $table->dropColumn('cv');
        });
    }
}
