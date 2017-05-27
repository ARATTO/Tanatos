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
    protected $fillable = [
        'id',
        'nombreexamenclinico',
        'descripcionexamenclinico',
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

     /**
     * RETORNO DE RELACIONES
     *
     */
     public function examenClinico(){
         return $this->hasMany('App\ExamenClinico');
     }
}
