<?php

use Illuminate\Database\Seeder;

class SeedSala extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sala')->insert([
            'numerosala' => 101,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 101,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 102,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 103,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 104,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 105,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 106,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 201,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 202,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 203,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 204,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 205,
        ]);

        DB::table('sala')->insert([
            'numerosala' => 206,
        ]);

    }
}
