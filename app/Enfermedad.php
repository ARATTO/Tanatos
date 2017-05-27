<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $table = 'enfermedad';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'codigoenfermedad',
        'nombreenfermedad',
        /*FK*/
        'idtipoenfermedad',
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
     public function tipoEnfermedades(){
         return $this->belongsTo('App\TipoEnfermedad');
     }
     /**
     * RETORNO DE RELACIONES
     *
     */
     public function diagnostico(){
         return $this->hasMany('App\Diagnostico');
     }
}
