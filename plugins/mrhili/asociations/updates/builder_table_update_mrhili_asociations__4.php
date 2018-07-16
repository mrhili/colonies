<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociations4 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->string('slug', 191)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->string('slug', 191)->nullable()->change();
        });
    }
}
