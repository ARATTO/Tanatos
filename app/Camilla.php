<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camilla extends Model
{
    protected $table = 'camilla';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'numerocamilla',
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
