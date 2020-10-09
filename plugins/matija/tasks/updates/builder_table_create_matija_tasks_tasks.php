<?php namespace Matija\Tasks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMatijaTasksTasks extends Migration
{
    public function up()
    {
        Schema::create('matija_tasks_tasks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('content');
            $table->boolean('is_finished')->default(false);
            $table->integer('priority')->default(0);
            $table->dateTime('finished_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('matija_tasks_tasks');
    }
}
