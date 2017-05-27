<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospital';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombre',
        'descripciondireccion',
        /*FK*/
        'idpais',
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
     public function paises(){
         return $this->belongsTo('App\Pais');
     }
     /**
     * RETORNO DE RELACIONES
     *
     */
     public function expediente(){
         return $this->hasMany('App\Expediente');
     }
}
