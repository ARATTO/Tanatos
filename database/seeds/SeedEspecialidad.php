<?php

use Illuminate\Database\Seeder;

class SeedEspecialidad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Medico General',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Neurologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Cardiologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Neumologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Oncologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Urologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Oftalmologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Otorrinolaringologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Cirujia Plastica',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Nefrologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Psiquiatria',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Nutriologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Pediatria',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Infectologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Anestesiologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Gastroenterologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Geriatria',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Alergologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Hematologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Toxicologia',
        ]);

        DB::table('especialidad')->insert([
            'nombreespecialidad' => 'Reumatologia',
        ]);
    }
}
