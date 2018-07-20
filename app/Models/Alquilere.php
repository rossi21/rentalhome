<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Alquilere
 * @package App\Models
 * @version July 20, 2018, 2:53 am UTC
 *
 * @property integer id_casa
 * @property integer id_cliente
 * @property date fecha_inicio
 * @property date fecha_entrega
 */
class Alquilere extends Model
{
    use SoftDeletes;

    public $table = 'alquileres';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_casa',
        'id_cliente',
        'fecha_inicio',
        'fecha_entrega'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_casa' => 'integer',
        'id_cliente' => 'integer',
        'fecha_inicio' => 'date',
        'fecha_entrega' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
