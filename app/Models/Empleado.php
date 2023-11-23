<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $cargo_id
 * @property $nombre
 * @property $apellido
 * @property $direccion
 * @property $correo
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Cargo $cargo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'cargo_id' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'direccion' => 'required',
		'correo' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cargo_id','nombre','apellido','direccion','correo','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargo()
    {
        return $this->hasOne('App\Models\Cargo', 'id', 'cargo_id');
    }
    

}
