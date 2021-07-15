<?php

namespace Database\Seeders;

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
        $this->call(CategoriaOperador::class);
        $this->call(UsuarioSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
