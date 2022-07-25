<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Desa
 * @package App\Models
 * @version July 25, 2022, 3:57 am UTC
 *
 * @property string $namadesa
 * @property string $namakepaladesa
 * @property string $alamatdesa
 * @property string $keterangan
 */
class Desa extends Model
{


    public $table = 'desa';
    



    public $fillable = [
        'namadesa',
        'namakepaladesa',
        'alamatdesa',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'namadesa' => 'string',
        'namakepaladesa' => 'string',
        'alamatdesa' => 'string',
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
