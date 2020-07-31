<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DetallePedido
 * @package App\Models
 * @version July 29, 2020, 12:53 am UTC
 *
 * @property string $Cantidad
 * @property string $EstadoPedido
 * @property string $Gas
 */
class DetallePedido extends Model
{
    use SoftDeletes;

    public $table = 'detalle_pedidos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Cantidad',
        'EstadoPedido',
        'Gas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Cantidad' => 'string',
        'EstadoPedido' => 'string',
        'Gas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Cantidad' => 'required',
        'EstadoPedido' => 'required'
    ];

    
}
