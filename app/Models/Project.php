<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Project
 * @package App\Models
 * @version July 21, 2022, 9:01 am UTC
 *
 * @property string $project_id
 * @property string $project_name
 * @property string $project_handler
 */
class Project extends Model
{


    public $table = 'projects';

    public $fillable = [
        'project_id',
        'project_name',
        'project_handler'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project_id' => 'string',
        'project_name' => 'string',
        'project_handler' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];
}
