<?php

use Illuminate\Database\Seeder;

class SeedRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombrerol' => 'Administrador',
            'descripcionrol' => 'No tiene restriccion',
        ]);

        DB::table('rol')->insert([
            'nombrerol' => 'Recepcionista',
            'descripcionrol' => 'Atiende a los que llegan',
        ]);

        DB::table('rol')->insert([
            'nombrerol' => 'Enfermera',
            'descripcionrol' => 'Vela por los enfermos',
        ]);

        DB::table('rol')->insert([
            'nombrerol' => 'Medico',
            'descripcionrol' => 'Cura a los enfermos',
        ]);

        DB::table('rol')->insert([
            'nombrerol' => 'Laboratorista',
            'descripcionrol' => 'Encargado de laboratorio clinico',
        ]);

        DB::table('rol')->insert([
            'nombrerol' => 'Paciente',
            'descripcionrol' => 'Solicita un servicio de la clinica',
        ]);

        DB::table('rol')->insert([
            'nombrerol' => 'Fisioterapista',
            'descripcionrol' => 'Soba al que le duele algo',
        ]);
    }
}

