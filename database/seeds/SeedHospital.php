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
            'idmunicipio' => 1 ,
            'nombre' => 'Hospital Chelito',
            'descripciondireccion' => 'colonia las vegas calle N°5',
        ]);

    }
}