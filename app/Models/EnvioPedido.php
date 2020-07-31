<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EnvioPedido
 * @package App\Models
 * @version July 29, 2020, 12:56 am UTC
 *
 * @property string $Estado
 * @property string $Numero
 * @property string $Descripcion
 */
class EnvioPedido extends Model
{
    use SoftDeletes;

    public $table = 'envio_pedidos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Estado',
        'Numero',
        'Descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Estado' => 'string',
        'Numero' => 'string',
        'Descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Estado' => 'required',
        'Numero' => 'required',
        'Descripcion' => 'required'
    ];

    
}
