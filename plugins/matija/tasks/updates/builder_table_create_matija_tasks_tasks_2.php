<?php namespace Matija\Tasks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMatijaTasksTasks2 extends Migration
{
    public function up()
    {
        Schema::create('matija_tasks_tasks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('content');
            $table->boolean('is_finished');
            $table->integer('priority')->default(0);
            $table->dateTime('finished_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('matija_tasks_tasks');
    }
}
