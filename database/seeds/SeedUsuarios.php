<?php

use Illuminate\Database\Seeder;

class SeedUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MOTTO
        DB::table('usuario')->insert([
            'nombres' => 'Dario Roman',
            'apellidos' => 'Araya Motto',
            'genero' => 'M',
            'fechanacimiento' => '1993/06/21',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'am11098@ues.edu.sv',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
        //ALAM
        DB::table('usuario')->insert([
            'nombres' => 'Alam Ulises',
            'apellidos' => 'Lopez x2',
            'genero' => 'M',
            'fechanacimiento' => '1995/01/01',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'll13002@ues.edu.sv',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
        //LOBO
        DB::table('usuario')->insert([
            'nombres' => 'Bryan Lobos',
            'apellidos' => 'Cruz',
            'genero' => 'M',
            'fechanacimiento' => '1995/01/01',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'lc13004@ues.edu.sv',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
        //ELIAS
        DB::table('usuario')->insert([
            'nombres' => 'Elias',
            'apellidos' => 'Barrera',
            'genero' => 'M',
            'fechanacimiento' => '1995/01/01',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'bv13003@ues.edu.sv',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
        //RODRIGO
        DB::table('usuario')->insert([
            'nombres' => 'Rodrigo Daniel',
            'apellidos' => 'Romero',
            'genero' => 'M',
            'fechanacimiento' => '1993/01/01',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
            'email' => 'sr11038@ues.edu.sv',
            'password' => bcrypt('Administrador'),
            /*FK*/
            'idestadocivil' => 1,
            'idrol' => 1,
        ]);
    }
}
