<?php

use Illuminate\Database\Seeder;

class SeedHospital extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('hospital')->insert([
            'idpais' => 1,
            'nombre' => 'Santa Rita del Rosario',
            'descripciondireccion' => 'colonia las vegas calle N°5',
        ]);
    }
}
