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
<<<<<<< HEAD
     
=======
     public function estadosCiviles(){
         return $this->belongsTo('App\EstadoCivil');
     }
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     public function roles(){
         return $this->belongsTo('App\Rol');
     }
     

    /**
     * RETORNO DE RELACIONES
     *
     */
<<<<<<< HEAD
     
     
     public function persona(){
         return $this->hasMany('App\Persona');
=======
     public function expediente(){
         return $this->hasMany('App\Expediente');
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     }
    
}
