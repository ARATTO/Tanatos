<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table = 'expediente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        
        /*FK*/
        'idpersona',
        'idhistorialclinico',
        'idhospital',
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

     
     public function personas(){
         return $this->belongsTo('App\Persona', 'idpersona');
     }
     public function historialesClinicos(){
         return $this->belongsTo('App\HistorialClinico', 'idhistorialclinico');
     }
     public function hospitales(){
         return $this->belongsTo('App\Hospital');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function cita(){
         return $this->hasMany('App\Cita');
     }
     public function ingreso(){
         return $this->hasMany('App\Ingreso','idexpediente');
     }

     
     //////////////////////////////////////////////////////


     /*SCOPE*/
    public function scopeExpediente($query,$expediente){
        if($expediente != ""){
            
            $query->where('id', "$expediente");
            }else{
                $query=null;
            }
     }//final del scope



}
