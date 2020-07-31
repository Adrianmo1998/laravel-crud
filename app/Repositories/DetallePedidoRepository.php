<?php

namespace App\Repositories;

use App\Models\DetallePedido;
use App\Repositories\BaseRepository;

/**
 * Class DetallePedidoRepository
 * @package App\Repositories
 * @version July 29, 2020, 12:53 am UTC
*/

class DetallePedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Cantidad',
        'EstadoPedido',
        'Gas'
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
        return DetallePedido::class;
    }
}
