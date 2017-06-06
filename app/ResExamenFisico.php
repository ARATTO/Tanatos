<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResExamenFisico extends Model
{
    protected $table = 'resexamenfisico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'resultadofisico',
        
        /*FK*/
        'idvideo',
        'idaudio',
        'idimagen',
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

     
     public function videos(){
         return $this->belongsTo('App\Video');
     }
     public function audios(){
         return $this->belongsTo('App\Audio');
     }
     public function imagenes(){
         return $this->belongsTo('App\Imagen');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function examenFisico(){
         return $this->hasMany('App\ExamenFisico');
     }
     
     //////////////////////////////////////////////////////
}
