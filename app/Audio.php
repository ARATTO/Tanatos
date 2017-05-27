<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $table = 'audio';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombreaudio',
        'extensionaudio',
        'audio',
        /*FK*/
        'idexamenfisico',
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
     public function examenesFisicos(){
         return $this->belongsTo('App\ExamenFisico');
     }
}
