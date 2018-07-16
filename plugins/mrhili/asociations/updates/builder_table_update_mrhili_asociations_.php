<?php namespace Mrhili\Asociations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrhiliAsociations extends Migration
{
    public function up()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->string('city');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('name')->change();
            $table->text('domaine')->nullable(false)->change();
            $table->string('region')->nullable(false)->change();
            $table->string('adresse')->nullable(false)->change();
            $table->string('tel')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('mrhili_asociations_', function($table)
        {
            $table->dropColumn('city');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('name', 191)->change();
            $table->text('domaine')->nullable()->change();
            $table->string('region', 191)->nullable()->change();
            $table->string('adresse', 191)->nullable()->change();
            $table->string('tel', 191)->nullable()->change();
            $table->string('email', 191)->nullable()->change();
        });
    }
}
