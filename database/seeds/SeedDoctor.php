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
        
        DB::table('doctor')->insert([
            'idpersona' => 5 ,
            'idespecialidad' => 3,
            'nombredoctor' => 'Rodrigo Daniel Segovia Romero',
            'esemergencia' => TRUE,
        ]);

    }
}
