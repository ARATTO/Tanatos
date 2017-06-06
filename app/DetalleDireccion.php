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

     
     public function municipio(){
         return $this->hasMany('App\Minicipio');
     }
     public function persona(){
         return $this->hasMany('App\Persona');
     }
     
     //////////////////////////////////////////////////////
}
