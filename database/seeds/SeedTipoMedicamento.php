<?php

use Illuminate\Database\Seeder;

class SeedTipoMedicamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipomedicamento')->insert([
        		'nombretipomedicamento' => 'Analgésico',
        		'descripciontipomedicamento' => 'Tienen la capacidad de aliviar el dolor producido por golpes',
        	]);

        DB::table('tipomedicamento')->insert([
        		'nombretipomedicamento' => 'Ansiolíticos e hipnóticos',
        		'descripciontipomedicamento' => 'Empleados para conciliar el sueño',
        	]);

        DB::table('tipomedicamento')->insert([
        		'nombretipomedicamento' => 'Antiácidos',
        		'descripciontipomedicamento' => 'Combaten agruras (sensación de sabor agrio)',
        	]);

        DB::table('tipomedicamento')->insert([
        		'nombretipomedicamento' => 'Antibióticos',
        		'descripciontipomedicamento' => 'Son capaces de interferir los procesos vitales de bacterias causantes de infecciones',
        	]);

        DB::table('tipomedicamento')->insert([
        		'nombretipomedicamento' => 'Antidiarreico',
        		'descripciontipomedicamento' => 'Controlan las evacuaciones frecuentes y acuosas que suelen estar acompañadas de dolor, debilidad, náuseas, vómitos',
        	]);

        DB::table('tipomedicamento')->insert([
        		'nombretipomedicamento' => 'Antihistamínicos',
        		'descripciontipomedicamento' => 'Controlan reacciones alérgicas',
        	]);

        DB::table('tipomedicamento')->insert([
        		'nombretipomedicamento' => 'Antigripales',
        		'descripciontipomedicamento' => 'Su objetivo es reducir los molestos síntomas de resfriados comunes y gripe',
        	]);

        DB::table('tipomedicamento')->insert([
        		'nombretipomedicamento' => 'Antiinflamatorios',
        		'descripciontipomedicamento' => 'Medicamentos contra el dolor, hinchazón, enrojecimiento y calentamiento en la zona afectada por golpes',
        	]);

        DB::table('tipomedicamento')->insert([
        		'nombretipomedicamento' => 'Antimicóticos',
        		'descripciontipomedicamento' => 'Alivian infecciones por hongos como pie de atleta.',
        	]);
    }
}
