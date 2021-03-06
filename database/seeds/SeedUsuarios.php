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
        DB::table('USER')->insert([
            'email' => 'am11098@ues.edu.sv',
            'password' => bcrypt('Administrador'),
            'usuario' => 'Dario Motto',
            'estado' => 1,
            /*FK*/
            'idrol' => 1,
        ]);
        ////////////////////////////////////////

        //ALAM
        DB::table('USER')->insert([
            'email' => 'alam_lopez@hotmail.com',
            'password' => bcrypt('Administrador'),
            'usuario' => 'Alam Lopez',
            'estado' => 1,
            /*FK*/
            'idrol' => 1,
        ]);
        ////////////////////////////////////////
        //LOBO
        DB::table('USER')->insert([
            'email' => 'bryan_lobos@hotmail.com',
            'password' => bcrypt('Administrador'),
            'usuario' => 'Lobo Cruz',
            'estado' => 1,
            /*FK*/
            'idrol' => 1,
        ]);
        ////////////////////////////////////////
        //ELIAS
        DB::table('USER')->insert([
            'email' => 'elias_barrera@hotmail.com',
            'password' => bcrypt('Administrador'),
            'usuario' => 'Elias Barrera',
            'estado' => 1,
            /*FK*/
            'idrol' => 1,
        ]);
        ////////////////////////////////////////
        //RODRIGO
        DB::table('USER')->insert([
            'email' => 'rodrigo_romero@hotmail.com',
            'password' => bcrypt('Administrador'),
            'usuario' => 'Rodrigo Segovia',
            'estado' => 1,
            /*FK*/
            'idrol' => 4,
        ]);
        ////////////////////////////////////////
    }
}
