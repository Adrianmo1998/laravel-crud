<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proveedores
 * @package App\Models
 * @version July 9, 2020, 10:58 pm UTC
 *
 * @property string $Nombre
 * @property string $Apellidos
 * @property string $Ubicacion
 */
class Proveedores extends Model
{
    use SoftDeletes;

    public $table = 'proveedores';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nombre',
        'Apellidos',
        'Ubicacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Nombre' => 'string',
        'Apellidos' => 'string',
        'Ubicacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Apellidos' => 'required',
        'Ubicacion' => 'required'
    ];

    
}
