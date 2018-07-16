<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociationsWorkers6 extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_workers', function($table)
        {
            $table->smallInteger('maried')->nullable(false)->unsigned()->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_workers', function($table)
        {
            $table->boolean('maried')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
