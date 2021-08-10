<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                "nom" => "Alexis",
                "age" => 25,
                "email" => "alexis@fsdglksjd.com",
                "telephone" => "0487554874"
            ],
            [
                "nom" => "Alexis",
                "age" => 25,
                "email" => "alexis@fsdglksjd.com",
                "telephone" => "0487554874",
            ],
            [
                "nom" => "Alexis",
                "age" => 25,
                "email" => "alexis@fsdglksjd.com",
                "telephone" => "0487554874",
            ],
            [
                "nom" => "Alexis",
                "age" => 25,
                "email" => "alexis@fsdglksjd.com",
                "telephone" => "0487554874",
            ],
            
        ]);
    }
}
