<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = Categoria::all();

        Producto::factory(20)->make()->each(function ($producto) use ($categorias) {

            $producto->categoria_id = $categorias->random()->id;

            $producto->save();
        });
    }
}