<?php
use Matija\Projects\Models\Projects;

Route::group(['prefix' => 'api/v1/projects'], function(){
  Route::get('/', function(){
    $projects = Projects::all();
    return $projects;
  });
  Route::post('/create', function(){
    $name = request()->input('name');
    $color = request()->input('color');
    $project = new Projects();
    $project->creation_date = date('m/d/Y');
    $project->name = $name;
    $project->color = $color;
    $project->save();
  });
  Route::post('/remove', function(){
    $id = request()->input('id');
    $project = Projects::findOrFail($id);
    $project->delete();
  });
});