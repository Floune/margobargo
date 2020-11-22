<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "margo",
            "email" => "admin@admin.com",
            'is_admin' => 1,
            "password" => bcrypt("margobargo"),
        ]);
    }
}
