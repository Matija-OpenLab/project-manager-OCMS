<?php namespace Matija\Tasks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMatijaTasksTasks3 extends Migration
{
    public function up()
    {
        Schema::table('matija_tasks_tasks', function($table)
        {
            $table->dateTime('finished_at')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('matija_tasks_tasks', function($table)
        {
            $table->dateTime('finished_at')->nullable(false)->change();
        });
    }
}
