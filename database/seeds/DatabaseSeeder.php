<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedPais::class);
        $this->call(SeedDepartamento::class);
        $this->call(SeedMunicipio::class);

        $this->call(SeedRoles::class);
        $this->call(SeedUsuarios::class);
        $this->call(SeedEstadoCivil::class);
        $this->call(SeedTelefonos::class);
        $this->call(SeedDetalleDireccion::class);

        $this->call(SeedPersona::class);
        $this->call(SeedTipoMedicamento::class);
        $this->call(SeedEspecialidad::class);
        
        $this->call(SeedHospital::class);
        $this->call(SeedCatalogoPrecio::class);

        $this->call(SeedTipoTratamiento::class);
        //$this->call(SeedSala::class);
        //$this->call(SeedCamilla::class);
        $this->call(SeedTipoExamenClinico::class);
        $this->call(SeedTipoExamenFisico::class);
        //$this->call(SeedDoctor::class);
        $this->call(SeedMedicamento::class);
        $this->call(SeedTipoEnfermedad::class);
        
        $this->call(SeedEnfermedad::class);
    }
}