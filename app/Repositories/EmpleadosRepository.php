<?php

namespace App\Repositories;

use App\Models\Empleados;
use App\Repositories\BaseRepository;

/**
 * Class EmpleadosRepository
 * @package App\Repositories
 * @version July 9, 2020, 6:46 pm UTC
*/

class EmpleadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Apellido_Paterno',
        'Edad',
        'Correo'
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
        return Empleados::class;
    }
}
