<?php namespace Matija\Projects\Models;

use Model;

/**
 * Model
 */
class Projects extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'matija_projects_projects';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'tasks' => ['Matija\Tasks\Models\Tasks', 'delete' => true]
    ];
}
