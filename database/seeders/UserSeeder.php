<?php

namespace Database\Seeders;

use App\Models\User;
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

        // User::create([
        //     'first_name' => "kidus",
        //     'last_name' => "Taye",
        //     'username' => "kidus@user",
        //     'password' => Hash::make("12345"),
        //     'user_role' => "admin",
        // ]);

        User::create([
            'first_name' => "john",
            'last_name' => "doe",
            'username' => "john@user",
            'password' => Hash::make("12345"),
            'user_role' => "user",
        ]);
    }
}
