<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                "last_name" => "Alip",
                "first_name" => "Alaysa",
                "email" => "library@neu.edu.ph",
                "email_verified_at" => \Carbon\Carbon::now(),
                "password" => \Illuminate\Support\Facades\Hash::make("secret"),
                "role_id" => 1
            ],
            [
                "last_name" => "Sese",
                "first_name" => "Roger",
                "email" => "roger.sese@neu.edu.ph",
                "email_verified_at" => \Carbon\Carbon::now(),
                "password" => \Illuminate\Support\Facades\Hash::make("secret"),
                "role_id" => 2
            ],
            [
                "last_name" => "Castro",
                "first_name" => "Danna",
                "email" => "danna.castro@neu.edu.ph",
                "email_verified_at" => \Carbon\Carbon::now(),
                "password" => \Illuminate\Support\Facades\Hash::make("secret"),
                "role_id" => 3
            ],
        ]);
    }
}
