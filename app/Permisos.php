<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    protected $table = 'permisos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombrepermiso',
        /*FK*/
        'idrol'
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
     public function roles(){
         return $this->belongsTo('App\Rol');
     }
}
