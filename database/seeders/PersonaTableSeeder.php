<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'nombres' => 'Jaime',
            'apellidos' => 'suaza',
            'genero' => 'masculino',
            'barrio' => 'esperanza',
            'idroles' => '1',
        ]);
    }
}
