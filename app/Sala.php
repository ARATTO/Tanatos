<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'sala';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'numerosala',
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
     public function ingreso(){
         return $this->hasMany('App\Ingreso');
     }
}
