<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleDireccion extends Model
{
    protected $table = 'detalledireccion';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'calle',
        'pasaje',
        'casa',
        'apartamento',
        'colonia',

        /*FK*/
        'idmunicipio'
        
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

     
     public function municipios(){
         return $this->belongsTo('App\Municipio');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function persona(){
         return $this->hasMany('App\Persona');
     }
     
     //////////////////////////////////////////////////////
}
