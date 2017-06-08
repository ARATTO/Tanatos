<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermisosRol extends Model
{
    protected $table = 'permisosrol';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombrepermisorol',
        
        /*FK*/
        'idrol',
        'idpermiso',
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

     
     public function roles(){
         return $this->belongsTo('App\Rol');
     }
     public function permisos(){
         return $this->belongsTo('App\Permiso');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     /*
     public function name_singular(){
         return $this->hasMany('App\Class');
     }
     */
     //////////////////////////////////////////////////////
}
