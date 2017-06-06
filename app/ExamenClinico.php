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
<<<<<<< HEAD

     
     public function resultadoExamenesClinicos(){
         return $this->belongsTo('App\ResultadoExamenClinico');
     }
     public function tipoExamenesClinico(){
=======
     public function tipoExamenesClinicos(){
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
         return $this->belongsTo('App\TipoExamenClinico');
     }
     public function consultasMedicas(){
         return $this->belongsTo('App\ConsultaMedica');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */
<<<<<<< HEAD

     /*
     public function name_singular(){
         return $this->hasMany('App\Class');
=======
     public function resultadoExamenClinico(){
         return $this->hasMany('App\ResultadoExamenClinico');
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     }
     */
     //////////////////////////////////////////////////////
}
