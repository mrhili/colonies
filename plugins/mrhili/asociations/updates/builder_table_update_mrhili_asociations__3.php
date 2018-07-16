<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociations3 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
