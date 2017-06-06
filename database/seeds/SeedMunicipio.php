<?php

use Illuminate\Database\Seeder;

class SeedMunicipio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipio')->insert([
            'iddepartamento' => 1,
            'nombremunicipio' => 'Mejicanos',
        ]);
    }
}
