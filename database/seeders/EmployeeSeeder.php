<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dep1 = Department::where('name', 'Ict')->first();
        $dep2 = Department::where('name', 'Transmitter')->first();
        $dep3 = Department::where('name', 'Technical studio')->first();

        Employee::create([
            'first_name' => "John",
            'last_name' => "Doe",
            'phone_no' => "0911121314",
            'employee_position' => "it assistant",
            'departmentId' => $dep1->id
        ]);

        Employee::create([
            'first_name' => "Jean",
            'last_name' => "Doe",
            'phone_no' => "0910111213",
            'employee_position' => "technician",
            'departmentId' => $dep3->id
        ]);
    }
}
