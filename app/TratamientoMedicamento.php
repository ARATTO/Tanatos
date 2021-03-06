<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TratamientoMedicamento extends Model
{
    protected $table = 'tratamientomedicamento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        
        /*FK*/
        'idmedicamento',
        'idtratamiento',
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

     
     public function medicamentos(){
         return $this->belongsTo('App\Medicamento','idmedicamento');
     }
     public function tratamientos(){
         return $this->belongsTo('App\Tratamiento','idtratamiento');
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
