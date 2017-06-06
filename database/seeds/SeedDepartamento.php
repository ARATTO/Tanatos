<?php

use Illuminate\Database\Seeder;

class SeedDepartamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'San Salvador',
        ]);
    }
}