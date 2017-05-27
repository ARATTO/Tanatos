<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialClinico extends Model
{
    protected $table = 'historialclinico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombremadre',
        'nombrepadre',
        'antesedentes',
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
     public function expediente(){
         return $this->hasMany('App\Expediente');
     }
}
