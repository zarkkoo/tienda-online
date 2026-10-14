<?php

namespace App\Models;

class Product
{
    public static function all()
    {
        return collect([
            (object) ['id' => 1, 'name' => 'Camiseta Casual', 'description' => 'Camiseta de algodón 100% cómoda y fresca.', 'price' => 19.99, 'image' => 'producto1.jpg'],
            (object) ['id' => 2, 'name' => 'Pantalón Vaquero', 'description' => 'Pantalón de mezclilla corte clásico.', 'price' => 45.50, 'image' => 'producto2.jpg'],
            (object) ['id' => 3, 'name' => 'Zapatillas Deportivas', 'description' => 'Zapatillas ligeras ideales para correr.', 'price' => 60.00, 'image' => 'producto3.jpg'],
            (object) ['id' => 4, 'name' => 'Chaqueta Impermeable', 'description' => 'Chaqueta resistente al agua y viento.', 'price' => 89.99, 'image' => 'producto4.jpg'],
            (object) ['id' => 5, 'name' => 'Gorra deportiva', 'description' => 'Gorra ajustable con protección solar.', 'price' => 14.99, 'image' => 'producto5.jpg'],
            (object) ['id' => 6, 'name' => 'Mochila Urbana', 'description' => 'Mochila con compartimento para portátil.', 'price' => 35.00, 'image' => 'producto6.jpg'],
            (object) ['id' => 7, 'name' => 'Reloj Minimalista', 'description' => 'Reloj de pulsera con correa de cuero.', 'price' => 75.00, 'image' => 'producto7.jpg'],
            (object) ['id' => 8, 'name' => 'Gafas de Sol', 'description' => 'Gafas con protección UV400 y estilo moderno.', 'price' => 25.00, 'image' => 'producto8.jpg'],
            (object) ['id' => 9, 'name' => 'Sudadera con Capucha', 'description' => 'Sudadera suave y abrigada para invierno.', 'price' => 40.00, 'image' => 'producto9.jpg'],
            (object) ['id' => 10, 'name' => 'Cinturón de Cuero', 'description' => 'Cinturón elegante de piel genuina.', 'price' => 22.50, 'image' => 'producto10.jpg'],
            (object) ['id' => 11, 'name' => 'Calcetines Deportivos (Pack 3)', 'description' => 'Pack de calcetines transpirables.', 'price' => 9.99, 'image' => 'producto11.jpg'],
            (object) ['id' => 12, 'name' => 'Bufanda de Lana', 'description' => 'Bufanda suave para días fríos.', 'price' => 18.00, 'image' => 'producto12.jpg'],
        ]);
    }
}