<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            ["name" => "Hamburguesas"],
            ["name" => "Snacks"],
            ["name" => "Combos"],
            ["name" => "Bebidas"],
            ["name" => "Postres"],
            ["name" => "Opciones saladas"],
            ["name" => "Café"],
            ["name" => "Bebidas de temporada"],
            ["name" => "Frappuccionos"],
            ["name" => "Tés"],
            ["name" => "Chocolates"],
            ["name" => "Bebidas saludables"],
            ["name" => "Comida fuerte"],
            ["name" => "Ligero"]
        ]);
    }
}
