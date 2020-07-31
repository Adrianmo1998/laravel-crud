<?php

namespace App\Repositories;

use App\Models\EstadoPedido;
use App\Repositories\BaseRepository;

/**
 * Class EstadoPedidoRepository
 * @package App\Repositories
 * @version July 29, 2020, 12:50 am UTC
*/

class EstadoPedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Descripcion'
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
        return EstadoPedido::class;
    }
}
