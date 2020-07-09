<?php

namespace App\Repositories;

use App\Models\Sucursal;
use App\Repositories\BaseRepository;

/**
 * Class SucursalRepository
 * @package App\Repositories
 * @version July 9, 2020, 8:34 pm UTC
*/

class SucursalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Direccion'
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
        return Sucursal::class;
    }
}
