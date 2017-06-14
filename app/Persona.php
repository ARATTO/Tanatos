<?php

namespace App;

use App\Scope\AgeScope;
use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;

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
         return $this->belongsTo('App\User', 'iduser');
     }
     public function estadosCiviles(){
         return $this->belongsTo('App\EstadoCivil', 'idestadocivil');
     }
     public function telefonos(){
         return $this->belongsTo('App\Telefono', 'idtelefono');
     }
     public function detallesDirecciones(){
         return $this->belongsTo('App\DetalleDireccion','iddetalledireccion');
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
         return $this->hasMany('App\Expediente', 'idpersona');
     }


     //////////////////////////////////////////////////////


     /*Scope Global*/

   /* protected static function boot(){
        parent::boot();

        static::addGlobalScope(new AgeScope);
    }*/

    public function scopePrimerNombre($query,$cadena,$criterios,$porciones){

            //dd($cadena);    

            if(count($criterios) == 2){
                if ($criterios[0] == 1 && $criterios[1] == 2) {
                    if(count($porciones) == 2){
                        $query->orwhereRAW(" (primernombre || ' ' || segundonombre) = '$cadena' ");            
                        
                       return;
                    }
                    
                }
            }else{
                if(count($criterios) == 3){
                    if ($criterios[0] == 1 && $criterios[1] == 2 && $criterios[2] == 3) {
                        if(count($porciones) == 3){
                            $query->orwhereRAW(" (primernombre || ' ' || segundonombre || ' ' || primerapellido) = '$cadena' ");           
                           return;
                        }
                        
                    }
                }else{
                    if(count($criterios) == 4){
                        if ($criterios[0] == 1 && $criterios[1] == 2 && $criterios[2] == 3 && $criterios[3] == 4) {
                            if(count($porciones) == 4){
                                $query->orwhereRAW(" (primernombre || ' ' || segundonombre || ' ' || primerapellido || ' ' || segundoapellido) = '$cadena' ");           
                               return;
                            }
                            
                        }   
                    }                 
                }   


            }


            

            

     
            for ($i=0; $i <count($criterios); $i++) { 
                switch ($criterios[$i]) {
                case 1: //cretrio uno, primer nombre
                   
                   for ($k=0; $k <count($porciones);  $k++) { 
                        $query->orwhere('primernombre',"LIKE", "%$porciones[$k]%");   
                    }

                break;
                case 2: //cretrio dos, segundo nombre
                  for ($k=0; $k <count($porciones);  $k++) { 
                        $query->orwhere('segundonombre',"LIKE", "%$porciones[$k]%");   
                    }                    
                break;
                case 3: //cretrio tres, primer apellido
                   
                   for ($k=0; $k <count($porciones);  $k++) { 
                        $query->orwhere('primerapellido',"LIKE", "%$porciones[$k]%");   
                    }

                break;
                case 4: //cretrio cuatro, segundo apellido
                  for ($k=0; $k <count($porciones);  $k++) { 
                        $query->orwhere('segundoapellido',"LIKE", "%$porciones[$k]%");   
                    }                    
                break;
                case 5: //cretrio cinco, fecha de nacimiento
                
                
                $validador = 0;
        
                for ($k=0; $k <count($porciones);  $k++){ 
                    $t = $porciones[$k];
                
                    for ($i=0; $i <strlen($t) ; $i++) { 
                     $ascii = ord ($t[$i]);   
                         if ($ascii== 48 || $ascii== 49 || $ascii== 50 || $ascii== 51 || $ascii== 52  || $ascii== 53  || $ascii== 54 || $ascii== 55  || $ascii== 56  || $ascii== 57 || $ascii== 45 || $t[$i] == " ") {
                        
                        }else{
                            $validador = $validador +1;
                        }
                    }
                     
                    
                }

                  for ($k=0; $k <count($porciones);  $k++) {

                        if($validador == 0){
                            if (strlen($porciones[$k])  == 4) {
                                $query->orwhereRaw("( extract(year from to_date('$porciones[$k]','YYYY MM DD') ) = extract(year from fechanacimiento))");        
                            }
                            $query->orwhereRaw(" fechanacimiento =  (to_date('$porciones[$k]','YYY MM DD')) " ); 
                            
                        }         

                    }   



                break;                  
                

                 }
            }
     
 }



}
