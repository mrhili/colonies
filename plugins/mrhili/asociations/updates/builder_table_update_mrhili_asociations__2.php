<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociations2 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->string('name')->change();
            $table->string('region')->change();
            $table->string('adresse')->change();
            $table->string('tel')->change();
            $table->string('email')->change();
            $table->string('city')->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('region', 191)->change();
            $table->string('adresse', 191)->change();
            $table->string('tel', 191)->change();
            $table->string('email', 191)->change();
            $table->string('city', 191)->change();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
