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
    protected $fillable = [
        'id',
        /*FK*/
        'idhistorialclinico',
        'idhospital',
        'idusuario'
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
     public function historialesClinicos(){
         return $this->belongsTo('App\HistorialClinico');
     }
     public function hospitales(){
         return $this->belongsTo('App\Hospital');
     }
     public function usuarios(){
         return $this->belongsTo('App\User');
     }
     /**
     * RETORNO DE RELACIONES
     *
     */
     public function cita(){
         return $this->hasMany('App\Cita');
     }
     public function ingreso(){
         return $this->hasMany('App\Ingreso');
     }
}
