<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empleados
 * @package App\Models
 * @version July 9, 2020, 6:46 pm UTC
 *
 * @property string $Nombre
 * @property string $Apellido_Paterno
 * @property integer $Edad
 * @property email $Correo
 */
class Empleados extends Model
{
    use SoftDeletes;

    public $table = 'empleados';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nombre',
        'Apellido_Paterno',
        'Edad',
        'Correo'
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
        'Edad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Apellido_Paterno' => 'required',
        'Edad' => 'required',
        'Correo' => 'email'
    ];

    
}
