<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultaMedica extends Model
{
    protected $table = 'consultamedica';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'fechaconsulta',
        'descripcionsintomas',
        'sintomatologia',
        
        /*FK*/
        'idcostoservicio',
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

     
     public function costosServicios(){
         return $this->belongsTo('App\CostoServicio','idcostoservicio');
     }

     public function citas(){
         return $this->belongsTo('App\Cita');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function diagnostico(){
         return $this->hasMany('App\Diagnostico');
     }
     public function examenClinico(){
         return $this->hasMany('App\ExamenClinico','idexamenclinico');
     }
     public function examenFisico(){
         return $this->hasMany('App\ExamenFisico','idexamenfisico');
     }
     //////////////////////////////////////////////////////
}
