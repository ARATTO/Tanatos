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
    protected $fillable = [
        'id',
        'dosis',
        'frecuencia',
        'espostop',
        /*FK*/
        'idtipotratamiento',
        'iddiagnostico',
        'idmedicamento',
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
     public function tipoTratamientos(){
         return $this->belongsTo('App\TipoTratamiento');
     }
     public function diagnosticos(){
         return $this->belongsTo('App\Diagnostico');
     }
     public function medicamentos(){
         return $this->belongsTo('App\Medicamento');
     }
     /**
     * RETORNO DE RELACIONES
     *
     */
     
}
