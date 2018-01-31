<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            ['name' => "Carl's Jr.", "imageUrl" => "https://img.rappi.com.mx/restaurants/background/low/990005997-1516125610.png"],
            ['name' => "Burger King", "imageUrl" => "https://img.rappi.com.mx/restaurants/background/medium/900001100-1494565496.png"],
            ['name' => "Boca del Cielo", "imageUrl" => "https://img.rappi.com.mx/restaurants/background/medium/21040106-1493736896.jpeg"],
            ['name' => "Taqueria Minerva", "imageUrl" => "https://img.rappi.com.mx/restaurants/background/low/900002332-1497376028.png"]
        ]);
    }
}
