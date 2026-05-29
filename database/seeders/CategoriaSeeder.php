<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
                'nombre' => 'Ropa Deportiva',
                'descripcion' => 'Camisetas, tops, shorts, calzas, joggers, abrigos deportivos, medias y ropa para entrenamiento.',
            ],
            [
                'nombre' => 'Calzado Deportivo',
                'descripcion' => 'Zapatillas, botines y botas para running, futbol, gimnasio, trekking y actividades outdoor.',
            ],
            [
                'nombre' => 'Equipamiento por Disciplina',
                'descripcion' => 'Balones, raquetas, guantes, protectores y articulos deportivos para disciplinas especificas.',
            ],
            [
                'nombre' => 'Fitness y Musculacion',
                'descripcion' => 'Mancuernas, discos, barras, bandas elasticas, mats, maquinas y accesorios para gimnasio en casa.',
            ],
            [
                'nombre' => 'Tecnologia y Accesorios Deportivos',
                'descripcion' => 'Smartwatches, bandas cardiacas, audifonos, mochilas, bolsos y productos de hidratacion.',
            ],
            [
                'nombre' => 'Nutricion y Suplementacion Deportiva',
                'descripcion' => 'Proteinas, aminoacidos, creatina, geles, barras y bebidas para energia y recuperacion.',
            ],
        ];

        foreach ($categorias as $categoria) {
            Categoria::updateOrCreate(
                ['nombre' => $categoria['nombre']],
                [
                    'descripcion' => $categoria['descripcion'],
                    'activo' => true,
                ]
            );
        }
    }
}
