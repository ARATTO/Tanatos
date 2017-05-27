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
    protected $fillable = [
        'id',
        'campoexamenfisico',
        'precioexamenfisico',
        /*FK*/
        'idconsultamedica',
        'idtipoexamenfisico',
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
     public function consultasMedicas(){
         return $this->belongsTo('App\ConsultaMedica');
     }
     public function tipoExamenFisico(){
         return $this->belongsTo('App\TipoExamenFisico');
     }
     /**
     * RETORNO DE RELACIONES
     *
     */
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
     }
}
