<?php

use Illuminate\Database\Seeder;

class SeedCamilla extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('camilla')->insert([
            'numerocamilla' => 101,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 101,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 102,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 103,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 104,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 105,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 106,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 201,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 202,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 203,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 204,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 205,
            'estaenuso' => false,
        ]);

        DB::table('camilla')->insert([
            'numerocamilla' => 206,
            'estaenuso' => false,
        ]);
    }
}
