<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clientes
 * @package App\Models
 * @version July 9, 2020, 7:49 pm UTC
 *
 * @property string $Nombre
 * @property string $Apellido_Paterno
 * @property string $Apellido_Materno
 * @property string $Direccion
 */
class Clientes extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nombre',
        'Apellido_Paterno',
        'Apellido_Materno',
        'Direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Nombre' => 'string',
        'Apellido_Paterno' => 'string',
        'Apellido_Materno' => 'string',
        'Direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Apellido_Paterno' => 'required',
        'Apellido_Materno' => 'required',
        'Direccion' => 'required'
    ];

    
}
