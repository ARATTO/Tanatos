<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagen';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombreimagen',
        'extensionimagen',
        'imagen',

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

     
     public function resExamenFisico(){
         return $this->hasMany('App\ResExamenFisico');
=======
     public function examenesFisicos(){
         return $this->belongsTo('App\ExamenFisico');
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     }
     
     //////////////////////////////////////////////////////
}
