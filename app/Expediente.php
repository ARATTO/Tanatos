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
<<<<<<< HEAD
         return $this->belongsTo('App\Persona');
=======
         return $this->belongsTo('App\Persona', 'idpersona');
>>>>>>> 16cec7cc1465ed6279a5a0b6b81e434a7e9b0f5c
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
         return $this->hasMany('App\Cita', 'idexpediente');
     }
     public function ingreso(){
         return $this->hasMany('App\Ingreso','idexpediente');
     }
<<<<<<< HEAD
     
     //////////////////////////////////////////////////////
=======

     
     //////////////////////////////////////////////////////


     /*SCOPE*/
    public function scopeExpediente($query,$expediente){
        if($expediente != ""){
            
            $query->where('id', "$expediente");
            }else{
                $query=null;
            }
     }//final del scope



>>>>>>> 16cec7cc1465ed6279a5a0b6b81e434a7e9b0f5c
}
