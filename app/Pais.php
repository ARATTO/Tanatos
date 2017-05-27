<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombrepais',
        'codigoarea',
        'codigopais',
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
     * RETORNO DE RELACIONES
     *
     */
     public function departamento(){
         return $this->hasMany('App\Departamento');
     }
     public function hospital(){
         return $this->hasMany('App\Hospital');
     }
}
