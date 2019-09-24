<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'email' => 'test@test.com'
        ]);
        $this->call(IntervencionesSeeder::class);
        $this->call(ProblemasSeeder::class);
    }
}
