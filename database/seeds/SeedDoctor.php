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
            'idespecialidad' => '2',
            'esemergencia' => true,
        ]);

        DB::table('doctor')->insert([
            'nombredoctor' => 'Rafael Valle',
            'idespecialidad' => '1',
            'esemergencia' => false,
        ]);

        DB::table('doctor')->insert([
            'nombredoctor' => 'Kevin Rivera',
            'idespecialidad' => '1',
            'esemergencia' => false,
        ]);


        DB::table('doctor')->insert([
            'nombredoctor' => 'Ruth Torento',
            'idespecialidad' => '1',
            'esemergencia' => true,
        ]);


        DB::table('doctor')->insert([
            'nombredoctor' => 'Rosa Fernandez',
            'idespecialidad' => '2',
            'esemergencia' => true,
        ]);
    }
}
