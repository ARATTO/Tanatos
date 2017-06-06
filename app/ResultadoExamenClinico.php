<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoExamenClinico extends Model
{
    protected $table = 'resultadoexamenclinico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'resultadoclinico',
        
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

     /*
     public function name_plural(){
         return $this->belongsTo('App\Class');
     }
     */
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function examenClinico(){
         return $this->hasMany('App\ExamenClinico');
     }
     
     //////////////////////////////////////////////////////
}
