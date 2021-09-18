<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendedor;

class VendedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendedor::create([
            'id_vendedores' => '1',
            'sueldo' => '50000',
            'cant_ventas' => '20',
        ]);
    }
}
