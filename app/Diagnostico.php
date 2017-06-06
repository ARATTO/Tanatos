<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnostico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'descripciondiagnostico',
        
        /*FK*/
        'idconsultamedica',
        'idenfermedad',
        'idtratamiento',
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

     public function consultasMedicas(){
         return $this->belongsTo('App\ConsultaMedica');
     }
     public function enfermedades(){
         return $this->belongsTo('App\Enfermedad');
<<<<<<< HEAD
     }
     public function tratamientos(){
         return $this->belongsTo('App\Tratamiento');
=======
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
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
     public function tratamiento(){
         return $this->hasMany('App\Tratamiento');
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     }
     */
     //////////////////////////////////////////////////////
}
