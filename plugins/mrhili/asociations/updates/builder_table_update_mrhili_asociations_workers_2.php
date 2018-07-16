<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsWorkers2 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_workers', function($table)
        {
            $table->string('born_in');
            $table->string('name')->change();
            $table->string('last_name')->change();
            $table->string('function')->change();
            $table->string('level_study')->change();
            $table->string('field')->change();
            $table->string('tel')->change();
            $table->string('email')->change();
            $table->string('region')->change();
            $table->string('city')->change();
            $table->string('adress')->change();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_workers', function($table)
        {
            $table->dropColumn('born_in');
            $table->string('name', 191)->change();
            $table->string('last_name', 191)->change();
            $table->string('function', 191)->change();
            $table->string('level_study', 191)->change();
            $table->string('field', 191)->change();
            $table->string('tel', 191)->change();
            $table->string('email', 191)->change();
            $table->string('region', 191)->change();
            $table->string('city', 191)->change();
            $table->string('adress', 191)->change();
        });
    }
}
