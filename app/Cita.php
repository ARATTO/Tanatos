<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'cita';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'title',
        'start',
        'fin',
        'color',
<<<<<<< HEAD

        /*FK*/
        'iddoctor',
        'idconsultamedica',
=======
        /*FK*/
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
        'idexpediente',
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
     
     public function doctores(){
         return $this->belongsTo('App\Doctor');
     }
=======
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     public function consultasMedicas(){
         return $this->belongsTo('App\ConsultaMedica');
     }


     public function expedientes(){
         return $this->belongsTo('App\Expediente');
     }
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function signoVital(){
         return $this->hasMany('App\SignoVital');
     }
<<<<<<< HEAD
     
     //////////////////////////////////////////////////////
}
=======
}
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
