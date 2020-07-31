<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Factura
 * @package App\Models
 * @version July 29, 2020, 12:58 am UTC
 *
 * @property string $Fecha
 * @property string $Numero
 * @property string $Estado
 * @property string $Detalle
 */
class Factura extends Model
{
    use SoftDeletes;

    public $table = 'facturas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Fecha',
        'Numero',
        'Estado',
        'Detalle'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Fecha' => 'string',
        'Numero' => 'string',
        'Estado' => 'string',
        'Detalle' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Fecha' => 'required',
        'Numero' => 'required',
        'Estado' => 'required',
        'Detalle' => 'required'
    ];

    
}
