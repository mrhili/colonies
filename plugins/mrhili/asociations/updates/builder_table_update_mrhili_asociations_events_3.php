<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsEvents3 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->text('domain')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->string('domain', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
