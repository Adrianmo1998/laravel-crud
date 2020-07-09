<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sucursal
 * @package App\Models
 * @version July 9, 2020, 8:34 pm UTC
 *
 * @property string $Nombre
 * @property string $Direccion
 */
class Sucursal extends Model
{
    use SoftDeletes;

    public $table = 'sucursals';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nombre',
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
        'Direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Direccion' => 'required'
    ];

    
}
