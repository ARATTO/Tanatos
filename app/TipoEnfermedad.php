<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEnfermedad extends Model
{
    protected $table = 'tipoenfermedad';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombretipoenfermedad',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    /**
    * Eliminar timestamps del modelo
    */
    public $timestamps = false;
    /**
     * RELACIONES
     *
     */

    /**
     * RETORNO DE RELACIONES
     *
     */
     public function enfermedad(){
         return $this->hasMany('App\Enfermedad');
     }

}
