<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Perencanaan
 * @package App\Models
 * @version July 27, 2022, 3:23 am UTC
 *
 * @property string $desa
 * @property string $perencanaan
 * @property string $pelaksanaan
 * @property string $pelaporan
 * @property string $keterangan
 */
class Perencanaan extends Model
{


    public $table = 'perencanaan';
    



    public $fillable = [
        'desa',
        'perencanaan',
        'pelaksanaan',
        'pelaporan',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'desa' => 'string',
        'perencanaan' => 'string',
        'pelaksanaan' => 'string',
        'pelaporan' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
