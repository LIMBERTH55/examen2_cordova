<?php

namespace Database\Factories;
use App\Models\Categoria;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [

        

        'nombre' => fake()->words(2,true),

        'sku' => fake()->unique()->bothify('SKU-####'),

        'precio' => fake()->randomFloat(2,10,500),

        'stock' => fake()->numberBetween(1,100),

        'disponible' => true
    ];
}
}
