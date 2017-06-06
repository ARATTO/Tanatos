<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombremunicipio',
        
        /*FK*/
        'iddepartamento',
        'iddetalledireccion',
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

     
     public function departamentos(){
         return $this->belongsTo('App\Departamento');
     }
     public function detalleDirecciones(){
         return $this->belongsTo('App\DetalleDireccion');
     }

     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function hospital(){
         return $this->hasMany('App\Hospital');
     }
     public function municipio(){
         return $this->hasMany('App\Municipio');
     }
     
     //////////////////////////////////////////////////////
}
