<?php

use Illuminate\Database\Seeder;

class SeedHospital extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospital')->insert([
            'idmunicipio' => 27 ,
            'nombre' => 'Hospital Nacional "Arturo Morales" de Metapan',
            'descripciondireccion' => 'colonia las vegas calle N°5',
        ]);

        DB::table('hospital')->insert([
            'idmunicipio' => 22 ,
            'nombre' => 'Hospital Nacional de Chalchuapa',
            'descripciondireccion' => 'Carretera de Santa Ana a Chalchuapa km 68',
        ]);

        DB::table('hospital')->insert([
            'idmunicipio' => 9 ,
            'nombre' => 'Hospital Nacional de San Bartolo “Enfermera
             Angélica Vidal de Najarro”' => 'Carretera de Oro km  3',
        ]);

        DB::table('hospital')->insert([
            'idmunicipio' => 97 ,
            'nombre' => 'Hospital Nacional de Nueva Concepcion',
            'descripciondireccion' => '2 Avenida Norte #567',
        ]);

        DB::table('hospital')->insert([
            'idmunicipio' => 149 ,
            'nombre' => 'Hospital Nacional de Suchitoto',
            'descripciondireccion' => '6 Avenida Norte #57',
        ]);

        DB::table('hospital')->insert([
            'idmunicipio' => 181 ,
            'nombre' => 'Hospital Nacional de Jiquilisco',
            'descripciondireccion' => '8 Avenida Norte #67',
        ]);

        DB::table('hospital')->insert([
            'idmunicipio' => 236 ,
            'nombre' => 'Hospital Nacional de Santa Rosa de Lima',
            'descripciondireccion' => '4 Avenida Norte #56',
        ]);

        DB::table('hospital')->insert([
            'idmunicipio' => 11 ,
            'nombre' => 'Hospital Nacional de Neumología y Medicina
             Familiar "Dr. José A. Saldaña"',
            'descripciondireccion' => 'Carretera a los planes de Renderos km 9',
        ]);
    }
}
