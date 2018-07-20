<?php

namespace App\Repositories;

use App\Models\Casa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CasaRepository
 * @package App\Repositories
 * @version July 20, 2018, 2:56 am UTC
 *
 * @method Casa findWithoutFail($id, $columns = ['*'])
 * @method Casa find($id, $columns = ['*'])
 * @method Casa first($columns = ['*'])
*/
class CasaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'direccion',
        'descripcion',
        'color',
        'precio'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Casa::class;
    }
}
