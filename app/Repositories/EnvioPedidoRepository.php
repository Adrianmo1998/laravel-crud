<?php

namespace App\Repositories;

use App\Models\EnvioPedido;
use App\Repositories\BaseRepository;

/**
 * Class EnvioPedidoRepository
 * @package App\Repositories
 * @version July 29, 2020, 12:56 am UTC
*/

class EnvioPedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Estado',
        'Numero',
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
        return EnvioPedido::class;
    }
}
