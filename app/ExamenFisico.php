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
         return $this->belongsTo('App\ConsultaMedica');
     }
<<<<<<< HEAD
     public function tipoExamenesFisicos(){
=======
     public function tipoExamenFisico(){
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
         return $this->belongsTo('App\TipoExamenFisico');
     }
     public function resultadosExamenesFisicos(){
         return $this->belongsTo('App\ResExamenFisico');
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
     public function audio(){
         return $this->hasMany('App\Audio');
     }
     public function costoServicio(){
         return $this->hasMany('App\CostoServicio');
     }
     public function imagen(){
         return $this->hasMany('App\Imagen');
     }
     public function resultadoExamenFisico(){
         return $this->hasMany('App\ResultadoExamenFisico');
     }
     public function video(){
         return $this->hasMany('App\Video');
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     }
     */
     //////////////////////////////////////////////////////
}
