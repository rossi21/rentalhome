<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Casa
 * @package App\Models
 * @version July 20, 2018, 2:56 am UTC
 *
 * @property string direccion
 * @property string descripcion
 * @property string color
 * @property float precio
 */
class Casa extends Model
{
    use SoftDeletes;

    public $table = 'casas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'direccion',
        'descripcion',
        'color',
        'precio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'direccion' => 'string',
        'descripcion' => 'string',
        'color' => 'string',
        'precio' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
