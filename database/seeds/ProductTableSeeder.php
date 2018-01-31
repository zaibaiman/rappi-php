<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name" => "Double Western Bacon Cheeseburger", 
                "description" => "Dos Piezas de carne 100% de res asada a la parrilla, salsa BBQ, rebanadas de tocino, queso americano y aros de cebolla empanizados",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975361918-1512666423.png",
                "price" => 93,
                "store_id" => 1,
                "category_id" => 1
            ],
            [
                "name" => "Combo Double Western Bacon Cheeseburger", 
                "description" => "Combo Double Western Bacon Cheeseburger. Incluye papas y refresco",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975361919-1512665903.png",
                "price" => 149,
                "store_id" => 1,
                "category_id" => 1
            ],
            [
                "name" => "Papas Grandes", 
                "description" => "Papas a la francesa de corte regular, saladitas, doradas por fuera y suaves por dentro.",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975088287-1490812199.png",
                "price" => 30,
                "store_id" => 2,
                "category_id" => 2
            ],
            [
                "name" => "King Aros de Cebolla Grandes", 
                "description" => "Aros de cebolla, perfectos para sumergirse con alguna de nuestras deliciosas salsas.",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975088290-1490812216.png",
                "price" => 30,
                "store_id" => 2,
                "category_id" => 2
            ],
            [
                "name" => "Cheesy Tots", 
                "description" => "La mejor manera de acompañar tus combos con un crujiente sabor a queso que te encantará. 8 piezas.",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975088289-1490812203.png",
                "price" => 34,
                "store_id" => 2,
                "category_id" => 2
            ],
            [
                "name" => "Whopper® con Queso", 
                "description" => "La tradicional whopper con carne de res a la parrilla, queso americano, pepinillos, salsa ketchup, rodajas de cebolla, tomate, lechuga fresca y mayonesa sobre un suave pan con ajonjolí. Incluye papas regulares (95 g) y un refresco (400 ml).",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975088276-1506657541.png",
                "price" => 86,
                "store_id" => 2,
                "category_id" => 3
            ],
            [
                "name" => "Frappé de moras grande", 
                "description" => "Hielo triturado con base de jugo de moras, hierbabuena, fresa, zarzamora, blueberry y frambuesa",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975099048-1496116793.png",
                "price" => 65,
                "store_id" => 3,
                "category_id" => 3
            ],
            [
                "name" => "Sangria Tinta", 
                "description" => "Limonada mineral con hierbabuena, vino tinto y mango-manzana",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975098985-1496116779.png",
                "price" => 72,
                "store_id" => 3,
                "category_id" => 3
            ],
            [
                "name" => "Limonada de guanábana grande", 
                "description" => "Refrescante bebida a base de limón con hierbabuena y pulpa natural de guanábana",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975099037-1496116773.png",
                "price" => 54,
                "store_id" => 3,
                "category_id" => 3
            ],
            [
                "name" => "Limonada de maracuyá grande", 
                "description" => "Refrescante bebida a base de limon con hierbabuena y pulpa natural de maracuyá",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975099033-1496116761.png",
                "price" => 54,
                "store_id" => 3,
                "category_id" => 3
            ],
            [
                "name" => "Limonada de moras grande", 
                "description" => "Refrescante bebida a base de limón con hierbabuena acompañada con fresa, frambuesa, zarzamora y blueberry",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975099028-1496116785.png",
                "price" => 54,
                "store_id" => 3,
                "category_id" => 3
            ],
            [
                "name" => "Baguette", 
                "description" => "Selva negra y queso manchego en pan artesanal y acompañado de ensalada y papas doradas",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975097420-1493741738.png",
                "price" => 130,
                "store_id" => 4,
                "category_id" => 13
            ],
            [
                "name" => "Ensalada", 
                "description" => "Rica ensalada de frutos rojos con queso de cabra",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975097425-1493741730.png",
                "price" => 110,
                "store_id" => 4,
                "category_id" => 14
            ],
            [
                "name" => "Club Sandwich", 
                "description" => "Rico Club Sandwich",
                "imageUrl" => "https://img.rappi.com.mx/products/high/975097424-1493741724.png",
                "price" => 95,
                "store_id" => 4,
                "category_id" => 14
            ]
        ]);
    }
}
