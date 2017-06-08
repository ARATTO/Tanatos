<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioPrecio extends Model
{
    protected $table = 'servicioprecio';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        
        /*FK*/
        'idcatalogoprecio',
        'idcostoservicio',
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

     
     public function catalogosPrecios(){
         return $this->belongsTo('App\CatalogoPrecio');
     }
     public function costosServicios(){
         return $this->belongsTo('App\CostoServicio');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     /*
     public function name_singular(){
         return $this->hasMany('App\Class');
     }
     */
     //////////////////////////////////////////////////////
}
