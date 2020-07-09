<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pedido
 * @package App\Models
 * @version July 9, 2020, 8:48 pm UTC
 *
 * @property integer $Numero
 * @property string $Hora
 * @property string $Fecha
 * @property string $Calle
 * @property string $Estado
 * @property string $Factura
 * @property string $Nombre_Cliente
 * @property integer $Telefono_Cliente
 * @property string $Tipo_entrega
 * @property string $Detalle
 * @property integer $Total
 */
class Pedido extends Model
{
    use SoftDeletes;

    public $table = 'pedidos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Numero' => 'integer',
        'Hora' => 'string',
        'Fecha' => 'string',
        'Calle' => 'string',
        'Estado' => 'string',
        'Factura' => 'string',
        'Nombre_Cliente' => 'string',
        'Telefono_Cliente' => 'integer',
        'Tipo_entrega' => 'string',
        'Detalle' => 'string',
        'Total' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Numero' => 'required',
        'Hora' => 'required',
        'Fecha' => 'required',
        'Calle' => 'required',
        'Estado' => 'required',
        'Factura' => 'required',
        'Nombre_Cliente' => 'required',
        'Telefono_Cliente' => 'required',
        'Tipo_entrega' => 'required',
        'Detalle' => 'required',
        'Total' => 'required'
    ];

    
}
