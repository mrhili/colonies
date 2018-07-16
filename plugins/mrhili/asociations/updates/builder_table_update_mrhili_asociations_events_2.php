<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsEvents2 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name')->change();
            $table->string('domain')->change();
            $table->string('region')->change();
            $table->string('city')->change();
            $table->string('adress')->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_events', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('name', 191)->change();
            $table->string('domain', 191)->change();
            $table->string('region', 191)->change();
            $table->string('city', 191)->change();
            $table->string('adress', 191)->change();
            $table->string('slug', 191)->change();
        });
    }
}
