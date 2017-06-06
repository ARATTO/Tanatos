<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'USER';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'email',
        'estado',
        /*FK*/
        'idrol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
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
     

    /**
     * RETORNO DE RELACIONES
     *
     */
     
     
     public function persona(){
         return $this->hasMany('App\Persona');
     }
    
}
