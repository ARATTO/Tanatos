<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = 'tratamiento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'dosis',
        'frecuencia',
        'espostop',
        
        /*FK*/
        'idtipotratamiento',
<<<<<<< HEAD
=======
        'iddiagnostico',
        'idmedicamento',
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

     
     public function tiposTratamientos(){
         return $this->belongsTo('App\TipoTratamiento');
=======
     public function tipoTratamientos(){
         return $this->belongsTo('App\TipoTratamiento');
     }
     public function diagnosticos(){
         return $this->belongsTo('App\Diagnostico');
     }
     public function medicamentos(){
         return $this->belongsTo('App\Medicamento');
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */
<<<<<<< HEAD

     
     public function diagnostico(){
         return $this->hasMany('App\Diagnostico');
     }
     public function tratamientoMedicamento(){
         return $this->hasMany('App\TratamientoMedicamento');
     }
     
     //////////////////////////////////////////////////////
=======
     
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
}
