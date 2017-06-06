<?php

use Illuminate\Database\Seeder;

class SeedTipoTratamiento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('tipotratamiento')->insert([
            'nombretipotratamiento' => 'Terapia individual',
            'descripciontipotratamiento' => 'es la aplicada a un sólo paciente',
            'preciotratamiento' => 600.00,
        ]);

        DB::table('tipotratamiento')->insert([
            'nombretipotratamiento' => 'Terapia grupal',
            'descripciontipotratamiento' => 'es aplicada a varios pacientes a la vez',
            'preciotratamiento' => 1000.00,
        ]);

        DB::table('tipotratamiento')->insert([
            'nombretipotratamiento' => 'Tratamiento curativo',
            'descripciontipotratamiento' => 'es el que tras ser aplicado se consigue una reversión total de la enfermedad',
            'preciotratamiento' => 800.00,
        ]);

        DB::table('tipotratamiento')->insert([
            'nombretipotratamiento' => 'Tratamiento especifico',
            'descripciontipotratamiento' => ' es el dirigido contra una enfermedad concreta',
            'preciotratamiento' => 1250.00,
        ]);

         DB::table('tipotratamiento')->insert([
            'nombretipotratamiento' => 'Tratamiento etiologico',
            'descripciontipotratamiento' => 'es el que actúa directamente sobre la causa que origina una enfermedad.',
            'preciotratamiento' => 500.00,
        ]);

          DB::table('tipotratamiento')->insert([
            'nombretipotratamiento' => 'Tratamiento sintomatico',
            'descripciontipotratamiento' => 'es el que calma o alivia los síntomas en aquellas enfermedades que se desconocen o que no tienen un tratamiento eficaz.',
            'preciotratamiento' => 645.00,
        ]);

    }
}
