<?php

namespace App\Repositories;

use App\Models\Desa;
use App\Repositories\BaseRepository;

/**
 * Class DesaRepository
 * @package App\Repositories
 * @version July 25, 2022, 3:57 am UTC
*/

class DesaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'namadesa',
        'namakepaladesa',
        'alamatdesa',
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
        return Desa::class;
    }
}
