<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = 'tratamiento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'dosis',
        'frecuencia',
        'espostop',
        
        /*FK*/
        'idtipotratamiento',
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

     
     public function tiposTratamientos(){
         return $this->belongsTo('App\TipoTratamiento');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function diagnostico(){
         return $this->hasMany('App\Diagnostico');
     }
     public function tratamientoMedicamento(){
         return $this->belongsToMany('App\TratamientoMedicamento','tratamientomedicamento','idtratamiento','idmedicamento');
     }

     //////////////////////////////////////////////////////
}
