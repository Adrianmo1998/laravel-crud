<?php

namespace App\Repositories;

use App\Models\Proveedores;
use App\Repositories\BaseRepository;

/**
 * Class ProveedoresRepository
 * @package App\Repositories
 * @version July 9, 2020, 10:58 pm UTC
*/

class ProveedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Apellidos',
        'Ubicacion'
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
        return Proveedores::class;
    }
}
