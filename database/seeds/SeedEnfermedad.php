<?php

use Illuminate\Database\Seeder;

class SeedEnfermedad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('enfermedad')->insert([
        		'idtipoenfermedad' => 6,
        		'codigoenfermedad' => 'AOO',
        		'nombreenfermedad' => 'Colera',
        	]);

        DB::table('enfermedad')->insert([
        		'idtipoenfermedad' => 6,
        		'codigoenfermedad' => 'A15',
        		'nombreenfermedad' => 'Tuberculosis',
        	]);

        DB::table('enfermedad')->insert([
        		'idtipoenfermedad' => 5,
        		'codigoenfermedad' => 'A77',
        		'nombreenfermedad' => 'Fiebre vaculosa',
        	]);

        DB::table('enfermedad')->insert([
        		'idtipoenfermedad' => 3,
        		'codigoenfermedad' => 'G40',
        		'nombreenfermedad' => 'Epilepsia',
        	]);

    }
}
