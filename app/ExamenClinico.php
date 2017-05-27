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
    protected $fillable = [
        'id',
        'campoexamenclinico',
        'precioexamenclinico',
        /*FK*/
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
    /**
    * Eliminar timestamps del modelo
    */
    public $timestamps = false;
    /**
     * RELACIONES
     *
     */
     public function tipoExamenesClinicos(){
         return $this->belongsTo('App\TipoExamenClinico');
     }
     public function consultasMedicas(){
         return $this->belongsTo('App\ConsultaMedica');
     }
     
     /**
     * RETORNO DE RELACIONES
     *
     */
     public function resultadoExamenClinico(){
         return $this->hasMany('App\ResultadoExamenClinico');
     }
}
