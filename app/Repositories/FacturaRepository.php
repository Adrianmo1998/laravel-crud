<?php

namespace App\Repositories;

use App\Models\Factura;
use App\Repositories\BaseRepository;

/**
 * Class FacturaRepository
 * @package App\Repositories
 * @version July 29, 2020, 12:58 am UTC
*/

class FacturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Fecha',
        'Numero',
        'Estado',
        'Detalle'
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
        return Factura::class;
    }
}
