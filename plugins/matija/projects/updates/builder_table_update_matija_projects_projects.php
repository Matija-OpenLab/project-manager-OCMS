<?php namespace Matija\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMatijaProjectsProjects extends Migration
{
    public function up()
    {
        Schema::table('matija_projects_projects', function($table)
        {
            $table->string('creation_date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('matija_projects_projects', function($table)
        {
            $table->date('creation_date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
