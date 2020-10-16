<?php namespace Matija\Tasks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMatijaTasksTasks extends Migration
{
    public function up()
    {
        Schema::table('matija_tasks_tasks', function($table)
        {
            $table->boolean('is_finished')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('matija_tasks_tasks', function($table)
        {
            $table->boolean('is_finished')->default(null)->change();
        });
    }
}
