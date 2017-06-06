<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctor';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'nombredoctor',
        'esemergencia',
        
        /*FK*/
        'idpersona',
        'idespecialidad',
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

     
     public function personas(){
         return $this->belongsTo('App\Personas');
     }
     public function especialidad(){
         return $this->belongsTo('App\Especialidad');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function cita(){
         return $this->hasMany('App\Cita');
     }
     public function horario(){
         return $this->hasMany('App\Horario');
     }
     public function ingreso(){
         return $this->hasMany('App\Ingreso');
<<<<<<< HEAD
=======
     }


    public function scopeNombre($query,$name){
        if($name != ""){
        $query->where('nombredoctor',"LIKE", "%$name%");
            }
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
     }
     
     //////////////////////////////////////////////////////
}
