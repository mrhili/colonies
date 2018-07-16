<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsWorkers extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_workers', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
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
