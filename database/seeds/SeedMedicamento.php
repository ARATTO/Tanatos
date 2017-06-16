<?php

use Illuminate\Database\Seeder;

class SeedMedicamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('medicamento')->insert([
            'idtipomedicamento' => 1,
            'codigomedicamento' => 'NO3AX11',
            'nombremedicamento' => 'Topamac 200g 20 tabletas',
            'viaadministracion' => 'Oral',
            'concentracion' => 'A',
            'formafarmaceutica' => 'Tableta cubierta con pelicula',
            'observacion' => 'Escalofrios',
            'preciomedicamento' => 1.5,
            
        ]);

        DB::table('medicamento')->insert([
            'idtipomedicamento' => 2,
            'codigomedicamento' => 'IBRF85',
            'nombremedicamento' => 'Ibuprofeno 250g 15 tabletas',
            'viaadministracion' => 'Oral',
            'concentracion' => 'A',
            'formafarmaceutica' => 'Tableta cubierta con pelicula',
            'observacion' => 'Infeccion',
            'preciomedicamento' => 1.20,
            
        ]);

        DB::table('medicamento')->insert([
            'idtipomedicamento' => 3,
            'codigomedicamento' => 'AS15S2',
            'nombremedicamento' => 'Acetaminofen 200g 20 tabletas',
            'viaadministracion' => 'Oral',
            'concentracion' => 'A',
            'formafarmaceutica' => 'Tableta cubierta con pelicula',
            'observacion' => 'Dolores',
            'preciomedicamento' => 1,
            
        ]);

        DB::table('medicamento')->insert([
            'idtipomedicamento' => 3,
            'codigomedicamento' => 'LR34DC',
            'nombremedicamento' => 'Loratadina 300g 10 tabletas',
            'viaadministracion' => 'Oral',
            'concentracion' => 'A',
            'formafarmaceutica' => 'Tableta cubierta con pelicula',
            'observacion' => 'Alergias',
            'preciomedicamento' => 1,
            
        ]);

        DB::table('medicamento')->insert([
            'idtipomedicamento' => 4,
            'codigomedicamento' => 'DFRES3X',
            'nombremedicamento' => 'Metocarbamol 500g 20 tabletas',
            'viaadministracion' => 'Oral',
            'concentracion' => 'A',
            'formafarmaceutica' => 'Tableta cubierta con pelicula',
            'observacion' => 'Muscular',
            'preciomedicamento' => 0.15,
            
        ]);
    }
}
