<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Camiseta Casual', 'description' => 'Camiseta de algodón 100% cómoda y fresca.', 'price' => 19.99, 'image' => 'https://picsum.photos/seed/prod1/300/200'],
            ['name' => 'Pantalón Vaquero', 'description' => 'Pantalón de mezclilla corte clásico.', 'price' => 45.50, 'image' => 'https://picsum.photos/seed/prod2/300/200'],
            ['name' => 'Zapatillas Deportivas', 'description' => 'Zapatillas ligeras ideales para correr.', 'price' => 60.00, 'image' => 'https://picsum.photos/seed/prod3/300/200'],
            ['name' => 'Chaqueta Impermeable', 'description' => 'Chaqueta resistente al agua y viento.', 'price' => 89.99, 'image' => 'https://picsum.photos/seed/prod4/300/200'],
            ['name' => 'Gorra deportiva', 'description' => 'Gorra ajustable con protección solar.', 'price' => 14.99, 'image' => 'https://picsum.photos/seed/prod5/300/200'],
            ['name' => 'Mochila Urbana', 'description' => 'Mochila con compartimento para portátil.', 'price' => 35.00, 'image' => 'https://picsum.photos/seed/prod6/300/200'],
            ['name' => 'Reloj Minimalista', 'description' => 'Reloj de pulsera con correa de cuero.', 'price' => 75.00, 'image' => 'https://picsum.photos/seed/prod7/300/200'],
            ['name' => 'Gafas de Sol', 'description' => 'Gafas con protección UV400 y estilo moderno.', 'price' => 25.00, 'image' => 'https://picsum.photos/seed/prod8/300/200'],
            ['name' => 'Sudadera con Capucha', 'description' => 'Sudadera suave y abrigada para invierno.', 'price' => 40.00, 'image' => 'https://picsum.photos/seed/prod9/300/200'],
            ['name' => 'Cinturón de Cuero', 'description' => 'Cinturón elegante de piel genuina.', 'price' => 22.50, 'image' => 'https://picsum.photos/seed/prod10/300/200'],
            ['name' => 'Calcetines Deportivos (Pack 3)', 'description' => 'Pack de calcetines transpirables.', 'price' => 9.99, 'image' => 'https://picsum.photos/seed/prod11/300/200'],
            ['name' => 'Bufanda de Lana', 'description' => 'Bufanda suave para días fríos.', 'price' => 18.00, 'image' => 'https://picsum.photos/seed/prod12/300/200'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}