<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombredepartamento',
        
        /*FK*/
        'idpais',
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

     
     public function paises(){
         return $this->belongsTo('App\Pais');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */
<<<<<<< HEAD

     /*
     public function name_singular(){
         return $this->hasMany('App\Class');
=======
     public function municipio(){
         return $this->hasMany('App\Municipio');
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     }
     */
     //////////////////////////////////////////////////////
}
