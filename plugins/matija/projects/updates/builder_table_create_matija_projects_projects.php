<?php namespace Matija\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMatijaProjectsProjects extends Migration
{
    public function up()
    {
        Schema::create('matija_projects_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->date('creation_date');
            $table->string('color')->default('#808080');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('matija_projects_projects');
    }
}
