<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidad';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombreespecialidad',

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

     
     public function doctor(){
         return $this->hasMany('App\Doctor');
     }
     
     //////////////////////////////////////////////////////
}
