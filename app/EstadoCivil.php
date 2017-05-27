<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    protected $table = 'estadocivil';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombreestadocivil',
        'descripcionestadocivil',
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
     public function user(){
         return $this->hasMany('App\User');
     }
}
