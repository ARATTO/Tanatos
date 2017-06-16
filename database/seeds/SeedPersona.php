<?php

use Illuminate\Database\Seeder;

class SeedPersona extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MOTTO
        DB::table('persona')->insert([
            'dui'                   => '12345671',
            'primernombre'          => 'Dario',
            'segundonombre'         => 'Roman',
            'primerapellido'        => 'Araya',
            'segundoapellido'       => 'Motto',
            'genero'                => 'M',
            'fechanacimiento'       => '1993/06/21',
        
            /*FK*/
            'iduser'                => 1,
            'idestadocivil'         => 1,
            'idtelefono'            => 1,
            'iddetalledireccion'    => 1,
        ]);
        ////////////////////////////////////////
        
        //ALAM
        DB::table('persona')->insert([

            'dui'                   => '12345672',
            'primernombre'          => 'Alam',
            'segundonombre'         => 'Alam',
            'primerapellido'        => 'Lopez',
            'segundoapellido'       => 'Lopez',
            'genero'                => 'M',
            'fechanacimiento'       => '1995/01/01',
        
            /*FK*/
            'iduser'                => 2,
            'idestadocivil'         => 1,
            'idtelefono'            => 2,
            'iddetalledireccion'    => 2,
        ]);
        ////////////////////////////////////////
        //LOBO
        DB::table('persona')->insert([

            'dui'                   => '12345673',
            'primernombre'          => 'Bryan',
            'segundonombre'         => 'Erick',
            'primerapellido'        => 'Lobos',
            'segundoapellido'       => 'Cruz',
            'genero'                => 'M',
            'fechanacimiento'       => '1995/01/01',
        
            /*FK*/
            'iduser'                => 3,
            'idestadocivil'         => 1,
            'idtelefono'            => 3,
            'iddetalledireccion'    => 3,
        ]);
        ////////////////////////////////////////
        //ELIAS
        DB::table('persona')->insert([

            'dui'                   => '12345674',
            'primernombre'          => 'Elias',
            'segundonombre'         => 'Ernesto',
            'primerapellido'        => 'Barrera',
            'segundoapellido'       => 'Barrera',
            'genero'                => 'M',
            'fechanacimiento'       => '1995/02/01',
        
            /*FK*/
            'iduser'                => 4,
            'idestadocivil'         => 1,
            'idtelefono'            => 4,
            'iddetalledireccion'    => 4,
        ]);
        ////////////////////////////////////////
        //RODRIGO
        DB::table('persona')->insert([

            'dui'                   => '12345675',
            'primernombre'          => 'Rodrigo',
            'segundonombre'         => 'Daniel',
            'primerapellido'        => 'Romero',
            'segundoapellido'       => 'Segovia',
            'genero'                => 'M',
            'fechanacimiento'       => '1995/01/11',
        
            /*FK*/
            'iduser'                => 5,
            'idestadocivil'         => 1,
            'idtelefono'            => 5,
            'iddetalledireccion'    => 5,
        ]);
        ////////////////////////////////////////
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 16cec7cc1465ed6279a5a0b6b81e434a7e9b0f5c
