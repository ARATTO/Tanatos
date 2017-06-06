<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMedicamento extends Model
{
    protected $table = 'tipomedicamento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombretipomedicamento',
        'descripciontipomedicamento',

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

<<<<<<< HEAD
     
=======
     /*public function medicamento(){
         return $this->belongsTo('App\Medicamento');
     }*/


>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     public function medicamento(){
         return $this->hasMany('App\Medicamento');
     }
     
     //////////////////////////////////////////////////////
}
