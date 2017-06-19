<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'ingreso';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        
        /*FK*/
        'iddoctor',
        'idexpediente',
        'idcamilla',
        'idsala',
        'fechaingreso',
        'fechasalida',
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

     
     public function doctores(){
         return $this->belongsTo('App\Doctor','iddoctor');
     }
     public function expedientes(){
         return $this->belongsTo('App\Expediente','idexpediente');
     }
     public function camillas(){
         return $this->belongsTo('App\Camilla','idcamilla');
     }
     public function salas(){
         return $this->belongsTo('App\Sala','idsala');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function bitacora(){
         return $this->hasMany('App\Bitacora');
     }
     
     //////////////////////////////////////////////////////

          /*SCOPE*/
    public function scopeIngreso($query,$ingreso){
        if($ingreso != ""){
            
            $query->where('id', "$ingreso");
            }else{
                $query=null;
            }
     }//final del scope
}
