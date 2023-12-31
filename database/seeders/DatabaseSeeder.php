<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(CategorySeeder::class);
        // $this->call(ItemSeeder::class);
        // $this->call(DepartmentSeeder::class);
        // $this->call(EmployeeSeeder::class);
        // $this->call(StoreItemSeeder::class);
        $this->call(UserSeeder::class);
    }
}
