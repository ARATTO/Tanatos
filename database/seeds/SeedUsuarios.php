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
<<<<<<< HEAD
        DB::table('USER')->insert([
=======
        DB::table('usuario')->insert([
            'nombres' => 'Dario Roman',
            'apellidos' => 'Araya Motto',
            'genero' => 'M',
            'fechanacimiento' => '1993/06/21',
            'detalledireccion' => 'Arkantos',
            'telefono' => '72345678',
            'telefonoresponsable' => '',
            'apellidocasado' => '',
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
            'email' => 'am11098@ues.edu.sv',
            'password' => bcrypt('Administrador'),
            'usuario' => 'Dario Motto',
            'estado' => 1,
            /*FK*/
            'idrol' => 1,
        ]);
        ////////////////////////////////////////

        //ALAM
<<<<<<< HEAD
        DB::table('USER')->insert([
            'email' => 'alam_lopez@hotmail.com',
=======
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
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
            'password' => bcrypt('Administrador'),
            'usuario' => 'Alam Lopez',
            'estado' => 1,
            /*FK*/
            'idrol' => 1,
        ]);
        ////////////////////////////////////////
        //LOBO
<<<<<<< HEAD
        DB::table('USER')->insert([
            'email' => 'bryan_lobos@hotmail.com',
=======
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
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
            'password' => bcrypt('Administrador'),
            'usuario' => 'Lobo Cruz',
            'estado' => 1,
            /*FK*/
            'idrol' => 1,
        ]);
        ////////////////////////////////////////
        //ELIAS
<<<<<<< HEAD
        DB::table('USER')->insert([
            'email' => 'elias_barrera@hotmail.com',
=======
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
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
            'password' => bcrypt('Administrador'),
            'usuario' => 'Elias Barrera',
            'estado' => 1,
            /*FK*/
            'idrol' => 1,
        ]);
        ////////////////////////////////////////
        //RODRIGO
<<<<<<< HEAD
        DB::table('USER')->insert([
            'email' => 'rodrigo_romero@hotmail.com',
=======
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
>>>>>>> f9ea6390589611718759cb66757b18ed654e8ec6
            'password' => bcrypt('Administrador'),
            'usuario' => 'Rodrigo Segovia',
            'estado' => 1,
            /*FK*/
            'idrol' => 1,
        ]);
        ////////////////////////////////////////
    }
}
