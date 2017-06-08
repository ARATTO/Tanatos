<?php

use Illuminate\Database\Seeder;

class SeedTelefonos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MOTTO
        DB::table('telefono')->insert([
            'casatelefono'    => '22222221',
            'trabajotelefono' => '22221231',
            'celulartelefono' => '77777771',
        ]);
        ////////////////////////////////////////
        
        //ALAM
        DB::table('telefono')->insert([
            'casatelefono'    => '22222222',
            'trabajotelefono' => '22221232',
            'celulartelefono' => '77777772',
        ]);
        ////////////////////////////////////////
        //LOBO
        DB::table('telefono')->insert([
            'casatelefono'    => '22222223',
            'trabajotelefono' => '22221233',
            'celulartelefono' => '77777773',
        ]);
        ////////////////////////////////////////
        //ELIAS
        DB::table('telefono')->insert([
            'casatelefono'    => '22222224',
            'trabajotelefono' => '22221234',
            'celulartelefono' => '77777774',
        ]);
        ////////////////////////////////////////
        //RODRIGO
        DB::table('telefono')->insert([
            'casatelefono'    => '22222225',
            'trabajotelefono' => '22221235',
            'celulartelefono' => '77777775',
        ]);
        ////////////////////////////////////////
    }
}
