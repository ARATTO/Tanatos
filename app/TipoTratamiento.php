<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTratamiento extends Model
{
    protected $table = 'tipotratamiento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombretipotratamiento',
        'descripciontipotratamiento',
        'preciotratamiento',
        
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

     
     public function tratamiento(){
         return $this->hasMany('App\Tratamiento');
     }
     
     //////////////////////////////////////////////////////
}
