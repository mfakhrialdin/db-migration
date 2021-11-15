<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                "list_id" => "1",
                "user_id" => "1",
                "name" => "todolist minggu ini",
                "reminder_datetime" => Date::now()->format('Y-m-d H:i:s'),
                "due_date" => Date::now()->format('Y-m-d H:i:s'),
                "attachment_url" => "https://wikipedia.com",
                "note" => "bismillah masyuk",
                "is_completed" => false,
                "is_my_day" => false,
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
