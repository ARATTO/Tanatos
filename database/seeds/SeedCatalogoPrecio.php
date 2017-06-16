<?php

use Illuminate\Database\Seeder;

class SeedCatalogoPrecio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         //
        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Medico General',
            'precioespecial' => 2.5,
            'descripcionprecioespecial' => 'Consulta con medico general',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Neurologia',
            'precioespecial' => 3,
            'descripcionprecioespecial' => 'Consulta de Neurologia',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Cardiologia',
            'precioespecial' => 3,
            'descripcionprecioespecial' => 'Consulta de Cardiologia',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Neumologia',
            'precioespecial' => 3,
            'descripcionprecioespecial' => 'Consulta de Neumologia',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Oncologia',
            'precioespecial' => 3,
            'descripcionprecioespecial' => 'Consulta por Oncologia',
        ]);



        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Urologia',
            'precioespecial' => 3,
            'descripcionprecioespecial' => 'Consulta de Urologia',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Oftalmologia',
            'precioespecial' => 3,
            'descripcionprecioespecial' => 'Consulta de Oftalmologia',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Otorrinolaringologia',
            'precioespecial' => 3,
            'descripcionprecioespecial' => 'Consulta de Otorrinolaringologia',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Cirujia Plastica',
            'precioespecial' => 300,
            'descripcionprecioespecial' => 'Cirujia plastica',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Nefrologia',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Consulta de Nefrologia',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Psiquiatria',
            'precioespecial' => 20,
            'descripcionprecioespecial' => 'Consulta Psiquiatrica',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Nutriologia',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Consulta de Nutriologia',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Pediatria',
            'precioespecial' => 3,
            'descripcionprecioespecial' => 'Consulta Pediatrica',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Infectologia',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Consulta de Infectologia',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Anestesiologia',
            'precioespecial' => 100,
            'descripcionprecioespecial' => 'Anestesiologia',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Gastroenterologia',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Consulta de Gastroenterologia',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Geriatria',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Consulta de Geriatria',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Alergologia',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Consulta de Alergologia',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Hematologia',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Consulta de Hematologia',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Toxicologia',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Consulta',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Reumatologia',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Consulta de Reumatologia',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Examen cardiaco y vascular',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Examen cardiaco',
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Examen dermatologico',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Examen dermatologico',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Examen osteoarticular',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Examen osteoarticular',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Examen otorrinolaringologico',
            'precioespecial' => 5,
            'descripcionprecioespecial' => 'Examen otorrinolaringologico',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Examen pulmonar',
            'precioespecial' => 15,
            'descripcionprecioespecial' => 'Examen pulmonar',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Examen odontologico',
            'precioespecial' => 3,
            'descripcionprecioespecial' => 'Examen odontologico',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Examen psiquiatrico',
            'precioespecial' => 30,
            'descripcionprecioespecial' => 'Examen psiquiatrico',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Inspeccion',
            'precioespecial' => 7,
            'descripcionprecioespecial' => 'Examen de Inspeccion',
        ]);

                DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Palpacion',
            'precioespecial' => 7,
            'descripcionprecioespecial' => 'Examen de Palpacion',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Auscultacion',
            'precioespecial' => 7,
            'descripcionprecioespecial' => 'Examen de Auscultacion',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Percusion',
            'precioespecial' => 7,
            'descripcionprecioespecial' => 'Examen de Percusion',
        ]);


        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Hospitalizacion',
            'precioespecial' => 12,
            'descripcionprecioespecial' => 'Hospitalizacion por dia',
        ]);

        
        DB::table('catalogoprecio')->insert([

            'nombreprecioespecial' => 'Topamac 200g 20 tabletas',
            'precioespecial' => 1.5,
            'descripcionprecioespecial' => 'pastillas',
            
        ]);

        DB::table('catalogoprecio')->insert([

            'nombreprecioespecial' => 'Ibuprofeno 250g 15 tabletas',
            'precioespecial' => 1.20,
            'descripcionprecioespecial' =>'Pastillas contra el dolor',
            
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Acetaminofen 200g 20 tabletas',
            'precioespecial' => 1,
            'descripcionprecioespecial' => 'Pastillas contra la fiebre',
            
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Loratadina 300g 10 tabletas',
            'precioespecial' => 1,
            'descripcionprecioespecial' => 'Pastillas contra la alergia',
            
        ]);

        DB::table('catalogoprecio')->insert([
            'nombreprecioespecial' => 'Metocarbamol 500g 20 tabletas',
            'precioespecial' => 0.15,
            'descripcionprecioespecial' =>'Pastillas para la gastritis',
            
        ]);


    }
}
