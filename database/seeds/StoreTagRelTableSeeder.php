<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreTagRelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_tag_rel')->insert([
            ["store_id" => 1, "tag_id" => 1],
            ["store_id" => 1, "tag_id" => 2],
            ["store_id" => 2, "tag_id" => 3],
            ["store_id" => 3, "tag_id" => 4],
            ["store_id" => 4, "tag_id" => 2]
        ]);
    }
}
