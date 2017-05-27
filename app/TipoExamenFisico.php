<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoExamenFisico extends Model
{
    protected $table = 'tipoexamenfisico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombreexamenfisico',
        'descripcionexamenfisico',
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
     * RETORNOS DE RELACIONES
     *
     */
     public function examenFisico(){
         return $this->hasMany('App\ExamenFisico');
     }
}
