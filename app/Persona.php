<?php

namespace App;

use App\Scope\AgeScope;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //////////////////////////////////////////////////////
    protected $fillable = [
        'id',
        'primernombre',
        'segundonombre',
        'primerapellido',
        'segundoapellido',
        'genero',
        'fechanacimiento',
        
        /*FK*/
        'iduser',
        'idestadocivil',
        'idtelefono',
        'iddetalledireccion',
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

     
     public function users(){
         return $this->belongsTo('App\User');
     }
     public function estadosCiviles(){
         return $this->belongsTo('App\EstadoCivil');
     }
     public function telefonos(){
         return $this->belongsTo('App\Telefono','idtelefono');
     }
     public function detallesDirecciones(){
         return $this->belongsTo('App\DetalleDireccion');
     }
     
     //////////////////////////////////////////////////////

     /**
     * RETORNO DE RELACIONES
     *
     */

     
     public function doctor(){
         return $this->hasMany('App\Doctor');
     }
     public function expediente(){
         return $this->hasMany('App\Expediente','idpersona');
     }
     
     //////////////////////////////////////////////////////


     /*Scope Global*/

   /* protected static function boot(){
        parent::boot();

        static::addGlobalScope(new AgeScope);
    }*/

    public function scopeDatos($query,$name){

        if($name != ""){
        $query;

            }
     }
}
