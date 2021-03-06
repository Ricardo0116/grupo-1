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
        // \App\Models\User::factory(10)->create();
        $this->call(RolTableSeeder::class);
        $this->call(PersonaTableSeeder::class);
        $this->call(VendedorTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
    }
}
