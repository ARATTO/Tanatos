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
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen dermatologico',
            'descripcionexamenclinico' => 'Examina la piel del paciente',
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen osteoarticular',
            'descripcionexamenclinico' => 'Examina las articulaciones',
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen otorrinolaringologico',
            'descripcionexamenclinico' => 'Examina el oido del paciente',
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen pulmonar',
            'descripcionexamenclinico' => 'Examina los pulmones del paciente',
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen odontologico',
            'descripcionexamenclinico' => 'Examina los dientes del paciente',
        ]);

        DB::table('tipoexamenclinico')->insert([
            'nombreexamenclinico' => 'Examen psiquiatrico',
            'descripcionexamenclinico' => 'Examina el comportamiento del paciente',
        ]);
    }
}
