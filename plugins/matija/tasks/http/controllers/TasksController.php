<?php

namespace Matija\Tasks\Http\Controllers;

use Matija\Tasks\Models\Tasks;
use Matija\Projects\Models\Projects;

class TasksController
{
  public function findTasks($project_id){
    $project = Projects::findOrFail($project_id);
    $tasks = $project->tasks()->get();
    return $tasks;
  }

  public function createTask($project_id){
    $project = Projects::findOrFail($project_id);
    $content = request()->input('content');
    $priority = request()->input('priority');
    
    $task = new Tasks();
    $task->content = $content;
    $task->priority = $priority;

    $project = $project->tasks()->add($task);
  }

  public function finishTask($task_id) {
    $task = Tasks::findOrFail($task_id);
    $task->is_finished = request()->input('finished');
    $task->finished_at = date('m/d/Y');
    $task->save();
  }
}