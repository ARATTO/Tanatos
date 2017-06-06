<?php

use Illuminate\Database\Seeder;

class SeedDoctor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('doctor')->insert([
            'nombredoctor' => 'Aristides Figueroa',
            'especialidad' => 'Urologo',
            'esemergencia' => true,
        ]);

        DB::table('doctor')->insert([
            'nombredoctor' => 'Rafael Valle',
            'especialidad' => 'Oncologo',
            'esemergencia' => false,
        ]);

        DB::table('doctor')->insert([
            'nombredoctor' => 'Kevin Rivera',
            'especialidad' => 'Neurologo',
            'esemergencia' => false,
        ]);


        DB::table('doctor')->insert([
            'nombredoctor' => 'Ruth Torento',
            'especialidad' => 'Neumologa',
            'esemergencia' => true,
        ]);


        DB::table('doctor')->insert([
            'nombredoctor' => 'Rosa Fernandez',
            'especialidad' => 'Oftalmologa',
            'esemergencia' => true,
        ]);
    }
}
