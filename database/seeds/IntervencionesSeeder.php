<?php

use App\Intervencion;
use Illuminate\Database\Seeder;

class IntervencionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Intervencion::create(['name' => 'Diagnóstico']);
        Intervencion::create(['name' => 'Tratamiento']);
        Intervencion::create(['name' => 'Seguimiento']);
    }
}
