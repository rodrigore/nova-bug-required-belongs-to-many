<?php

use App\Problema;
use Illuminate\Database\Seeder;

class ProblemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Problema::create(['name' => 'Problem 1']);
        Problema::create(['name' => 'Problem 2']);
    }
}

