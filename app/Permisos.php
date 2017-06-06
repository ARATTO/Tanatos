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
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombrepermiso',
<<<<<<< HEAD
        'descripcion',
=======
        /*FK*/
        'idrol'
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
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
<<<<<<< HEAD

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

     
     public function permisosRol(){
         return $this->hasMany('App\PermisosRol');
=======
     public function roles(){
         return $this->belongsTo('App\Rol');
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     }
     
     //////////////////////////////////////////////////////
}
