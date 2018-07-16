<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsEvents extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->string('slug');
            $table->string('name')->change();
            $table->string('domain')->change();
            $table->string('region')->change();
            $table->string('city')->change();
            $table->string('adress')->change();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->dropColumn('slug');
            $table->string('name', 191)->change();
            $table->string('domain', 191)->change();
            $table->string('region', 191)->change();
            $table->string('city', 191)->change();
            $table->string('adress', 191)->change();
        });
    }
}
