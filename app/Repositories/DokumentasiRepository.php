<?php

namespace App\Repositories;

use App\Models\Dokumentasi;
use App\Repositories\BaseRepository;

/**
 * Class DokumentasiRepository
 * @package App\Repositories
 * @version July 27, 2022, 3:27 am UTC
*/

class DokumentasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'desa',
        'kategori',
        'nama',
        'file',
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
        return Dokumentasi::class;
    }
}
