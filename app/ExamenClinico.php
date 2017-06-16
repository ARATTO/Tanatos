<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenClinico extends Model
{
    protected $table = 'examenclinico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',

        /*FK*/
        'idresultadoexamenclinico',
        'idtipoexamenclinico',
        'idconsultamedica',
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

     
     public function resultadoExamenesClinicos(){
         return $this->belongsTo('App\ResultadoExamenClinico');
     }
     public function tipoExamenesClinico(){
         return $this->belongsTo('App\TipoExamenClinico','idtipoexamenclinico');
     }
     public function consultasMedicas(){
         return $this->belongsTo('App\ConsultaMedica','idconsultamedica');
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
