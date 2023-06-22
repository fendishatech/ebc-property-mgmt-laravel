<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table("users")->insert([
            'first_name' => "kidus",
            'last_name' => "Taye",
            'username' => "kidus@user",
            'password' => Hash::make("12345"),
            'user_role' => "admin",
            'createdAt' => $now,
            'updatedAt' => $now,
        ]);
    }
}