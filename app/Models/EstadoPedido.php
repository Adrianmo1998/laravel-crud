<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EstadoPedido
 * @package App\Models
 * @version July 29, 2020, 12:50 am UTC
 *
 * @property string $Nombre
 * @property string $Descripcion
 */
class EstadoPedido extends Model
{
    use SoftDeletes;

    public $table = 'estado_pedidos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nombre',
        'Descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Nombre' => 'string',
        'Descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Descripcion' => 'required'
    ];

    
}
