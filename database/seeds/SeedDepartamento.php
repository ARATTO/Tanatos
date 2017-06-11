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
        //

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'San Salvador',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'Santa Ana',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'San Miguel',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'Sonsonate',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'Ahuachapan',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'Chalatenango',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'La Libertad',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'Cuscatlan',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'Cabañas',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'San Vicente',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'Usulutan',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'Morazan',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'La Union',
        ]);

        DB::table('departamento')->insert([
            'idpais' => 1,
            'nombredepartamento' => 'La Paz',
        ]);
    }
}

