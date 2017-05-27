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
    protected $fillable = [
        'id',
        'nombreimagen',
        'extensionimagen',
        'imagen',
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
