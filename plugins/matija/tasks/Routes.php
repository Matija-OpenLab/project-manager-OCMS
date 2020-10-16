<?php
use Matija\Tasks\Models\Tasks;
use Matija\Projects\Models\Projects;


Route::group(['prefix' => 'api/v1/tasks', 'namespace' => 'Matija\Tasks\Http\Controllers'], function(){
  Route::get('/{project_id}', 'TasksController@findTasks');
  Route::post('/{project_id}/create', 'TasksController@createTask');
  Route::post('/{task_id}/done', 'TasksController@finishTask');
});