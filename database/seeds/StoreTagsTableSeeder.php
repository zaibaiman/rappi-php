<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_tags')->insert([
            ['name' => 'Hamburguesas y Hot Dogs'],
            ['name' => 'Café y Té'],
            ['name' => 'Postres'],
            ['name' => 'Mariscos']
        ]);
    }
}
