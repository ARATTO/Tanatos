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
    protected $fillable = [
        'id',
        'nombredoctor',
        'especialidad',
        'esemergencia',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    /**
    * Eliminar timestamps del modelo
    */
    public $timestamps = false;
    /**
     * RELACIONES
     *
     */

     /**
     * RETORNO DE RELACIONES
     *
     */
     public function horario(){
         return $this->hasMany('App\Horario');
     }
     public function ingreso(){
         return $this->hasMany('App\Ingreso');
     }


    public function scopeNombre($query,$name){
        if($name != ""){
        $query->where('nombredoctor',"LIKE", "%$name%");
            }
     }
}
