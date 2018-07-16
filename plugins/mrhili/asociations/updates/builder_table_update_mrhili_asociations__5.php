<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociations5 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->boolean('confirmed')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->dropColumn('confirmed');
        });
    }
}
