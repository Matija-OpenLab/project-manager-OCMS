<?php namespace Matija\Tasks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMatijaTasksTasks extends Migration
{
    public function up()
    {
        Schema::dropIfExists('matija_tasks_tasks');
    }
    
    public function down()
    {
        Schema::create('matija_tasks_tasks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('content');
            $table->boolean('is_finished')->default(0);
            $table->integer('priority')->default(0);
            $table->dateTime('finished_at');
        });
    }
}
