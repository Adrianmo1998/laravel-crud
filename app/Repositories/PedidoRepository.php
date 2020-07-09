<?php

namespace App\Repositories;

use App\Models\Pedido;
use App\Repositories\BaseRepository;

/**
 * Class PedidoRepository
 * @package App\Repositories
 * @version July 9, 2020, 8:48 pm UTC
*/

class PedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Numero',
        'Hora',
        'Fecha',
        'Calle',
        'Estado',
        'Factura',
        'Nombre_Cliente',
        'Telefono_Cliente',
        'Tipo_entrega',
        'Detalle',
        'Total'
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
        return Pedido::class;
    }
}
