<?php

namespace App\Repositories;

use App\Models\Perencanaan;
use App\Repositories\BaseRepository;

/**
 * Class PerencanaanRepository
 * @package App\Repositories
 * @version July 25, 2022, 3:25 am UTC
*/

class PerencanaanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'desa',
        'perencanaan',
        'pelaksanaan',
        'pelaporan',
        'keterangan'
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
        return Perencanaan::class;
    }
}
