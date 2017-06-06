<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\FinishScope;

class Medicamento extends Model
{
    protected $table = 'medicamento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'codigomedicamento',
        'nombremedicamento',
        'viaadministracion',
        'concentracion',
        'formafarmaceutica',
        'observacion',
        'preciomedicamento',
        
        /*FK*/
        'idtipomedicamento',
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
     
     public function tipoMedicamentos(){
         return $this->belongsTo('App\TipoMedicamento');
     }
     
     //////////////////////////////////////////////////////
=======
     /*public function tipoMedicamentos(){
         return $this->hasMany('App\TipoMedicamento');
     }*/

     public function tipoMedicamentos(){
         return $this->belongsTo('App\TipoMedicamento');
     }

>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6

     /**
     * RETORNO DE RELACIONES
     *
     */
<<<<<<< HEAD

     
     public function tratamientoMedicamento(){
         return $this->hasMany('App\TratamientoMedicamento');
     }
     
     //////////////////////////////////////////////////////
=======
     public function tratamiento(){
         return $this->hasMany('App\Tratamiento');
     }


     public function scopeName($query,$name){
        if($name != ""){
        $query->where('nombremedicamento',"LIKE", "%$name%");
            }
     }


>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
}
