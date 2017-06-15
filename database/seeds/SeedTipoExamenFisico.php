<?php

use Illuminate\Database\Seeder;

class SeedTipoExamenFisico extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	DB::table('tipoexamenfisico')->insert([
            'nombreexamenfisico' => 'Inspeccion',
            'descripcionexamenfisico' => 'Observar el cuerpo',
            'precioexamenfisico' => 50.00,
        ]);

        DB::table('tipoexamenfisico')->insert([
            'nombreexamenfisico' => 'Palpacion',
            'descripcionexamenfisico' => 'Sentir el cuerpo con los dedos o las manos',
            'precioexamenfisico' => 25.00,
        ]);

        DB::table('tipoexamenfisico')->insert([
            'nombreexamenfisico' => 'Auscultacion',
            'descripcionexamenfisico' => 'Escuchar los sonidos',
            'precioexamenfisico' => 30.00,
        ]);

        DB::table('tipoexamenfisico')->insert([
            'nombreexamenfisico' => 'Percusion',
            'descripcionexamenfisico' => 'Producir sonidos',
            'precioexamenfisico' => 40.00,
        ]);


    }
}
