<?php

use Illuminate\Database\Seeder;

class SeedTipoEnfermedad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipoenfermedad')->insert([
        		'nombretipoenfermedad' => 'Infeccionsas',
        	]);

        DB::table('tipoenfermedad')->insert([
        		'nombretipoenfermedad' => 'Congenitas',
        	]);

        DB::table('tipoenfermedad')->insert([
        		'nombretipoenfermedad' => 'Hereditarias',
        	]);

        DB::table('tipoenfermedad')->insert([
        		'nombretipoenfermedad' => 'Autoinmunes',
        	]);

        DB::table('tipoenfermedad')->insert([
        		'nombretipoenfermedad' => 'Neurodegenerativas',
        	]);

        DB::table('tipoenfermedad')->insert([
        		'nombretipoenfermedad' => 'Mentales',
        	]);

        DB::table('tipoenfermedad')->insert([
        		'nombretipoenfermedad' => 'Metabolicas',
        	]);
    }
}
