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
<<<<<<< HEAD
         return $this->belongsTo('App\Municipio');
=======
         return $this->belongsTo('App\Municipio', 'idmunicipio');
>>>>>>> 16cec7cc1465ed6279a5a0b6b81e434a7e9b0f5c
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 16cec7cc1465ed6279a5a0b6b81e434a7e9b0f5c
