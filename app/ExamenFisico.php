<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    protected $table = 'examenfisico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        
        /*FK*/
        'idconsultamedica',
        'idtipoexamenfisico',
        'idresultadoexamenfisico',
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

     
     public function consultasMedicas(){
         return $this->belongsTo('App\ConsultaMedica','idconsultamedica');
     }
     public function tipoExamenesFisicos(){
         return $this->belongsTo('App\TipoExamenFisico','idtipoexamenfisico');
     }
     public function resultadosExamenesFisicos(){
         return $this->belongsTo('App\ResExamenFisico');
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
