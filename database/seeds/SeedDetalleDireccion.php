<?php

use Illuminate\Database\Seeder;

class SeedDetalleDireccion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MOTTO
        DB::table('detalledireccion')->insert([
            'calle'         => 'sisimiles',
            'pasaje'        => '5',
            'casa'          => '4',
            'apartamento'   => '15',
            'colonia'       => 'arkantos',
            'idmunicipio'   => 1,
        ]);
        ////////////////////////////////////////
        
        //ALAM
        DB::table('detalledireccion')->insert([
            'calle'         => 'sisimiles',
            'pasaje'        => '52',
            'casa'          => '45',
            'apartamento'   => '1',
            'colonia'       => 'arkantos',
            'idmunicipio'   => 1,
        ]);
        ////////////////////////////////////////
        //LOBO
        DB::table('detalledireccion')->insert([
            'calle'         => 'sonsonate',
            'pasaje'        => '5',
            'casa'          => '44',
            'apartamento'   => '145',
            'colonia'       => 'arkantos',
            'idmunicipio'   => 1,
        ]);
        ////////////////////////////////////////
        //ELIAS
        DB::table('detalledireccion')->insert([
            'calle'         => 'san jose',
            'pasaje'        => '85',
            'casa'          => '47',
            'apartamento'   => '15',
            'colonia'       => 'arkantos',
            'idmunicipio'   => 1,
        ]);
        ////////////////////////////////////////
        //RODRIGO
        DB::table('detalledireccion')->insert([
            'calle'         => 'san miguel',
            'pasaje'        => '532',
            'casa'          => '43',
            'apartamento'   => '145',
            'colonia'       => 'arkantos',
            'idmunicipio'   => 1,
        ]);
        ////////////////////////////////////////
    }
}
