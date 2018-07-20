<?php

namespace App\Repositories;

use App\Models\Alquilere;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlquilereRepository
 * @package App\Repositories
 * @version July 20, 2018, 2:53 am UTC
 *
 * @method Alquilere findWithoutFail($id, $columns = ['*'])
 * @method Alquilere find($id, $columns = ['*'])
 * @method Alquilere first($columns = ['*'])
*/
class AlquilereRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_casa',
        'id_cliente',
        'fecha_inicio',
        'fecha_entrega'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alquilere::class;
    }
}
