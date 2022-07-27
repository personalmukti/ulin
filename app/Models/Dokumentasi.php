<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Dokumentasi
 * @package App\Models
 * @version July 27, 2022, 3:27 am UTC
 *
 * @property string $desa
 * @property string $kategori
 * @property string $nama
 * @property string $file
 * @property string $keterangan
 */
class Dokumentasi extends Model
{


    public $table = 'dokumentasi';
    



    public $fillable = [
        'desa',
        'kategori',
        'nama',
        'file',
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
        'kategori' => 'string',
        'nama' => 'string',
        'file' => 'string',
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
