<?php

use Illuminate\Database\Seeder;

class SeedTipoExamenClinico extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen cardiaco y vascular',
            'descripcionexamenclinico' => 'Examina el corazon del paciente',
            'precioexamenclinico' => 1000.00,

        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen dermatologico',
            'descripcionexamenclinico' => 'Examina la piel del paciente',
            'precioexamenclinico' => 2000.00,
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen osteoarticular',
            'descripcionexamenclinico' => 'Examina las articulaciones',
            'precioexamenclinico' => 3000.00,
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen otorrinolaringologico',
            'descripcionexamenclinico' => 'Examina el oido del paciente',
            'precioexamenclinico' => 1500.00,
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen pulmonar',
            'descripcionexamenclinico' => 'Examina los pulmones del paciente',
            'precioexamenclinico' => 1050.00,
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen odontologico',
            'descripcionexamenclinico' => 'Examina los dientes del paciente',
            'precioexamenclinico' => 150.00,
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen psiquiatrico',
            'descripcionexamenclinico' => 'Examina el comportamiento del paciente',
            'precioexamenclinico' => 200.00,
        ]);
    }
}
