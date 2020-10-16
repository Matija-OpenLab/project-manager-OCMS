<?php namespace Matija\Tasks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMatijaTasksTasks2 extends Migration
{
    public function up()
    {
        Schema::table('matija_tasks_tasks', function($table)
        {
            $table->integer('projects_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('matija_tasks_tasks', function($table)
        {
            $table->dropColumn('projects_id');
        });
    }
}
