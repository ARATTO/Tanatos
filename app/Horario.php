<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'horainicio',
        'horafin',
        'fecha',
        /*FK*/
        'iddoctor',
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
     public function doctores(){
         return $this->belongsTo('App\Doctor');
     }
}
