<?php

namespace App\Repositories;

use App\Models\Kelembagaan;
use App\Repositories\BaseRepository;

/**
 * Class KelembagaanRepository
 * @package App\Repositories
 * @version July 28, 2022, 3:50 am UTC
*/

class KelembagaanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'desa',
        'bpd',
        'lkd',
        'pkk',
        'rt',
        'rw',
        'posyandu',
        'karangtaruna',
        'bumdes',
        'lpm',
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
        return Kelembagaan::class;
    }
}
