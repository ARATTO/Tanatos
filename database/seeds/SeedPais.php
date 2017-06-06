<?php

use Illuminate\Database\Seeder;

class SeedPais extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pais')->insert([
            'nombrepais' => 'El Salvador',
            'codigoarea' => 503,
            'codigopais' => 'ES345',
        ]);
    }
}
