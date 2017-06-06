<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoExamenClinico extends Model
{
    protected $table = 'tipoexamenclinico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombreexamenclinico',
        'descripcionexamenclinico',
        'precioexamenclinico',

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
