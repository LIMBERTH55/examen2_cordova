<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productosPorCategoria = [
            'Ropa Deportiva' => [
                ['nombre' => 'Camiseta de futbol', 'sku' => 'ROP-001', 'precio' => 89.90, 'stock' => 35],
                ['nombre' => 'Musculosa de entrenamiento', 'sku' => 'ROP-002', 'precio' => 64.90, 'stock' => 28],
                ['nombre' => 'Top deportivo', 'sku' => 'ROP-003', 'precio' => 79.90, 'stock' => 24],
                ['nombre' => 'Short de running', 'sku' => 'ROP-004', 'precio' => 69.90, 'stock' => 32],
                ['nombre' => 'Calza deportiva', 'sku' => 'ROP-005', 'precio' => 119.90, 'stock' => 20],
                ['nombre' => 'Pantalon jogger', 'sku' => 'ROP-006', 'precio' => 149.90, 'stock' => 18],
                ['nombre' => 'Rompevientos deportivo', 'sku' => 'ROP-007', 'precio' => 189.90, 'stock' => 14],
                ['nombre' => 'Sudadera con capucha', 'sku' => 'ROP-008', 'precio' => 169.90, 'stock' => 16],
                ['nombre' => 'Medias de compresion', 'sku' => 'ROP-009', 'precio' => 49.90, 'stock' => 40],
                ['nombre' => 'Traje de bano deportivo', 'sku' => 'ROP-010', 'precio' => 129.90, 'stock' => 12],
            ],
            'Calzado Deportivo' => [
                ['nombre' => 'Zapatillas running asfalto', 'sku' => 'CAL-001', 'precio' => 349.90, 'stock' => 18],
                ['nombre' => 'Zapatillas trail running', 'sku' => 'CAL-002', 'precio' => 399.90, 'stock' => 15],
                ['nombre' => 'Botines futbol 11', 'sku' => 'CAL-003', 'precio' => 289.90, 'stock' => 22],
                ['nombre' => 'Zapatillas futsal', 'sku' => 'CAL-004', 'precio' => 249.90, 'stock' => 20],
                ['nombre' => 'Zapatillas planas de gimnasio', 'sku' => 'CAL-005', 'precio' => 279.90, 'stock' => 16],
                ['nombre' => 'Zapatillas crossfit', 'sku' => 'CAL-006', 'precio' => 319.90, 'stock' => 13],
                ['nombre' => 'Botas de montana', 'sku' => 'CAL-007', 'precio' => 459.90, 'stock' => 10],
                ['nombre' => 'Zapatillas senderismo impermeables', 'sku' => 'CAL-008', 'precio' => 429.90, 'stock' => 11],
            ],
            'Equipamiento por Disciplina' => [
                ['nombre' => 'Balon de futbol', 'sku' => 'EQU-001', 'precio' => 99.90, 'stock' => 30],
                ['nombre' => 'Balon de basquetbol', 'sku' => 'EQU-002', 'precio' => 119.90, 'stock' => 22],
                ['nombre' => 'Balon de voleibol', 'sku' => 'EQU-003', 'precio' => 109.90, 'stock' => 20],
                ['nombre' => 'Pelotas de tenis pack x3', 'sku' => 'EQU-004', 'precio' => 39.90, 'stock' => 45],
                ['nombre' => 'Raqueta de tenis', 'sku' => 'EQU-005', 'precio' => 349.90, 'stock' => 9],
                ['nombre' => 'Pala de padel', 'sku' => 'EQU-006', 'precio' => 299.90, 'stock' => 12],
                ['nombre' => 'Raqueta de badminton', 'sku' => 'EQU-007', 'precio' => 129.90, 'stock' => 14],
                ['nombre' => 'Guantes de boxeo', 'sku' => 'EQU-008', 'precio' => 179.90, 'stock' => 17],
                ['nombre' => 'Protector bucal', 'sku' => 'EQU-009', 'precio' => 29.90, 'stock' => 38],
                ['nombre' => 'Canilleras deportivas', 'sku' => 'EQU-010', 'precio' => 59.90, 'stock' => 26],
                ['nombre' => 'Antiparras de natacion', 'sku' => 'EQU-011', 'precio' => 69.90, 'stock' => 24],
                ['nombre' => 'Gorro de silicona', 'sku' => 'EQU-012', 'precio' => 34.90, 'stock' => 30],
            ],
            'Fitness y Musculacion' => [
                ['nombre' => 'Mancuernas par 10 kg', 'sku' => 'FIT-001', 'precio' => 249.90, 'stock' => 14],
                ['nombre' => 'Disco olimpico 20 kg', 'sku' => 'FIT-002', 'precio' => 329.90, 'stock' => 18],
                ['nombre' => 'Barra olimpica', 'sku' => 'FIT-003', 'precio' => 699.90, 'stock' => 6],
                ['nombre' => 'Kettlebell 12 kg', 'sku' => 'FIT-004', 'precio' => 219.90, 'stock' => 12],
                ['nombre' => 'Bandas elasticas set', 'sku' => 'FIT-005', 'precio' => 89.90, 'stock' => 35],
                ['nombre' => 'Mat de yoga', 'sku' => 'FIT-006', 'precio' => 99.90, 'stock' => 28],
                ['nombre' => 'Foam roller', 'sku' => 'FIT-007', 'precio' => 79.90, 'stock' => 20],
                ['nombre' => 'Cinta de correr', 'sku' => 'FIT-008', 'precio' => 3499.90, 'stock' => 3],
                ['nombre' => 'Bicicleta estatica', 'sku' => 'FIT-009', 'precio' => 1899.90, 'stock' => 4],
                ['nombre' => 'Banco de pesas', 'sku' => 'FIT-010', 'precio' => 599.90, 'stock' => 7],
            ],
            'Tecnologia y Accesorios Deportivos' => [
                ['nombre' => 'Smartwatch deportivo', 'sku' => 'TEC-001', 'precio' => 899.90, 'stock' => 10],
                ['nombre' => 'Banda de frecuencia cardiaca', 'sku' => 'TEC-002', 'precio' => 249.90, 'stock' => 16],
                ['nombre' => 'Audifonos deportivos inalambricos', 'sku' => 'TEC-003', 'precio' => 299.90, 'stock' => 18],
                ['nombre' => 'Mochila deportiva', 'sku' => 'TEC-004', 'precio' => 159.90, 'stock' => 22],
                ['nombre' => 'Bolso de gimnasio', 'sku' => 'TEC-005', 'precio' => 139.90, 'stock' => 20],
                ['nombre' => 'Porta mat de yoga', 'sku' => 'TEC-006', 'precio' => 54.90, 'stock' => 24],
                ['nombre' => 'Botella termica', 'sku' => 'TEC-007', 'precio' => 79.90, 'stock' => 34],
                ['nombre' => 'Shaker de proteina', 'sku' => 'TEC-008', 'precio' => 39.90, 'stock' => 40],
                ['nombre' => 'Mochila de hidratacion', 'sku' => 'TEC-009', 'precio' => 219.90, 'stock' => 13],
            ],
            'Nutricion y Suplementacion Deportiva' => [
                ['nombre' => 'Proteina Whey 2 lb', 'sku' => 'NUT-001', 'precio' => 299.90, 'stock' => 20],
                ['nombre' => 'BCAAs 300 g', 'sku' => 'NUT-002', 'precio' => 179.90, 'stock' => 18],
                ['nombre' => 'Creatina monohidratada 300 g', 'sku' => 'NUT-003', 'precio' => 189.90, 'stock' => 24],
                ['nombre' => 'Geles energeticos pack x6', 'sku' => 'NUT-004', 'precio' => 89.90, 'stock' => 30],
                ['nombre' => 'Barra de proteina', 'sku' => 'NUT-005', 'precio' => 19.90, 'stock' => 60],
                ['nombre' => 'Bebida isotonica en polvo', 'sku' => 'NUT-006', 'precio' => 129.90, 'stock' => 19],
            ],
        ];

        foreach ($productosPorCategoria as $categoriaNombre => $productos) {
            $categoria = Categoria::where('nombre', $categoriaNombre)->firstOrFail();

            foreach ($productos as $producto) {
                Producto::updateOrCreate(
                    ['sku' => $producto['sku']],
                    [
                        'categoria_id' => $categoria->id,
                        'nombre' => $producto['nombre'],
                        'precio' => $producto['precio'],
                        'stock' => $producto['stock'],
                        'disponible' => true,
                    ]
                );
            }
        }
    }
}
