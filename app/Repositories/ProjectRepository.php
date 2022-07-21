<?php

namespace App\Repositories;

use App\Models\Project;
use App\Repositories\BaseRepository;

/**
 * Class ProjectRepository
 * @package App\Repositories
 * @version July 21, 2022, 9:01 am UTC
*/

class ProjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'project_id',
        'project_name',
        'project_handler'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Project::class;
    }
}
