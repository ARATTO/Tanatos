<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SignoVital extends Model
{
    protected $table = 'signovital';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'peso',
        'temperatura',
        'estatura',
        'presionarterial',
        'ritmocardiaco',
        'momento',
        
        /*FK*/
        'idcita',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    //////////////////////////////////////////////////////
    /**
    * Eliminar timestamps del modelo
    */
    public $timestamps = false;
    //////////////////////////////////////////////////////

    /**
     * RELACIONES
     *
     */

     
     public function citas(){
         return $this->belongsTo('App\Cita');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     /*
     public function name_singular(){
         return $this->hasMany('App\Class');
     }
     */
     //////////////////////////////////////////////////////
}
