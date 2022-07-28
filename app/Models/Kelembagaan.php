<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Kelembagaan
 * @package App\Models
 * @version July 28, 2022, 3:50 am UTC
 *
 * @property string $desa
 * @property string $bpd
 * @property string $lkd
 * @property string $pkk
 * @property string $rt
 * @property string $rw
 * @property string $posyandu
 * @property string $karangtaruna
 * @property string $bumdes
 * @property string $lpm
 * @property string $keterangan
 */
class Kelembagaan extends Model
{


    public $table = 'kelembagaan';
    



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'desa' => 'string',
        'bpd' => 'string',
        'lkd' => 'string',
        'pkk' => 'string',
        'rt' => 'string',
        'rw' => 'string',
        'posyandu' => 'string',
        'karangtaruna' => 'string',
        'bumdes' => 'string',
        'lpm' => 'string',
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
