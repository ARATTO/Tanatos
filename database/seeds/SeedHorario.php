<?php

use Illuminate\Database\Seeder;

class SeedHorario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	        DB::table('horario')->insert([
        		'iddoctor' => 1,
        		'horainicio' => '"08:00:00',
        		'horafin' => '23:00:00',
        		'fecha' => '2017-06-16',
        	]);

    }
}
