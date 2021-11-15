<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "name" => "Important",
                "created_at" => Date::now()->format('Y-m-d H:i:s'), 
                "updated_at" => Date::now()->format('Y-m-d H:i:s') 
            ]
            ]);
    }
}
